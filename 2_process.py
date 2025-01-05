import os
import re
import sys
import urllib.parse  # For URL decoding
import base64  # For Base64 decoding


def extract_lines_from_file(file_path):
    extracted_lines = []  # To save extracted lines
    recording = False  # Whether to extract the current line

    with open(file_path, 'r', encoding='utf-8') as file:
        for line in file:
            line = line.strip()  # Remove leading and trailing whitespace

            if line == "|line|#*|||op|fetch|ext|return|operands":
                extracted_lines.append("||||FunctionStart|||")  # Add function start marker
                recording = True  # Start recording
                continue  # Skip this line

            if line == "|":
                if recording:
                    extracted_lines.append("||||FunctionEnd|||")  # Add function end marker
                    recording = False  # Stop recording
                continue  # Skip this line

            if recording:
                extracted_lines.append(line)  # Record the extracted line

    return extracted_lines  # Return the list of extracted lines


def should_filter_line(parts):
    """Whether to filter the entire line based on the value of the fourth element"""
    if len(parts) >= 5:  # Ensure there are at least five elements
        prefix = parts[4]
        # Use regex to match instructions starting with JMP, and filter NOP, FREE, and BOOL,etc.
        if re.match(r'^JMP.*', prefix) or prefix in {"NOP", "BOOL", "BOOL_NOT", "COUNT", "RECV", "STRLEN", "EXIT", "CASE", "TYPE_CHECK", "THROW"} or re.match(r'(^FREE$|^FREE.*|.*FREE$)', prefix):
            return True  # Be filtered
    return False  # Not to be filtered


def filter_suffix_parts(suffix_parts):
    """Filter suffix parts"""
    filtered_suffix = []
    for part in suffix_parts:
        # Use regex to filter
        if re.match(r'^[!$~]\d+', part):
            continue  # Skip parts starting with !$~
        if part in {",", "<array>", "<false>", "<true>", "''", " ", "  "}:
            continue  # Skip standalone commas, <> and whitespace etc.
        if re.match(r'^->\d+$', part):
            continue  # Skip strings like ->420
        if re.match(r'.*,->\d+$', part):
            continue  # Skip strings like ,->27
        # Remove contents containing specific strings, such as Run directory info
        if re.search(r'%2Fsamples', part):
            continue  # Skip parts containing specific strings
        filtered_suffix.append(part)  # Keep other parts
    return filtered_suffix  # Return the filtered result


def truncate_suffix_elements(suffix_parts, max_length=120):
    """Truncate suffix parts"""
    truncated_suffix = []
    for part in suffix_parts:
        # replace two or more consecutive '+' with '+', The '+' represents a space in the URL decoding.
        part = re.sub(r'\+{2,}', '+', part)

        if len(part) > max_length:
            truncated_suffix.append(part[:max_length])  # Keep the first 120 characters
        else:
            truncated_suffix.append(part)  # Keep the original content
    return truncated_suffix  # Return the processed result


def decode_string(s):
    """Attempt to URL decode and Base64 decode a string"""
    # Check if the string is empty or numeric
    if not s or s.isdigit():  # If s is an empty string or all digits
        return s  # Return the string directly

    # Remove leading and trailing single quotes
    if s.startswith("'"):
        s = s[1:]  # Remove leading single quote
    if s.endswith("'"):
        s = s[:-1]  # Remove trailing single quote

    # URL decode , if it matches the characteristics
    if (('%' in s) and len(s) >= 3):
        # URL encoding truncation special handling
        #  %20 is complete. Truncation to %2 or % should be discarded.
        #  When truncated to 120 length,removing the leading single quote results in 119 length.
        if len(s) == 119:
            if s[-1] == '%':
                s = s[:-1]  # Discard the last character
            elif s[-2] == '%':
                s = s[:-2]  # Discard the last two characters

        try:
            url_decoded = urllib.parse.unquote_plus(s)  # Use unquote_plus to decode
            # Merge multiple newlines into a single newline
            url_decoded = re.sub(r'\n{2,}', '\n', url_decoded)
            url_decoded = re.sub(r'\r{2,}', '\r', url_decoded)
            # Replace '\n' and '\r' with spaces
            url_decoded_cleaned = url_decoded.replace('\n', ' ').replace('\r', ' ')
            # Remove '\uFFFD' and tab characters
            url_decoded_final = ''.join(c for c in url_decoded_cleaned if c != '\uFFFD' and c != '\t' and c.isprintable())

            s = url_decoded_final  # Update s to the decoded result
        except Exception as e:
            print(f"URL decoding failed or not URL string: {s}, Error: {e}")
            # Do not return s, continue with Base64 decoding

    # Base64 decode
    if len(s) >= 4:
        # Check for the existence of four data types. Uppercase letters, lowercase letters, numbers and '+' '/' '='
        has_upper = bool(re.search(r'[A-Z]', s))
        has_lower = bool(re.search(r'[a-z]', s))
        has_digit = bool(re.search(r'\d', s))
        has_special = bool(re.search(r'[+/=]', s))

        # Count the number of existing data types
        types_count = sum([has_upper, has_lower, has_digit, has_special])

        # At least three types must exist, and no other types to proceed with base64 decoding
        if types_count >= 3 and not (re.search(r'[^A-Za-z0-9+/=]', s)):
            # Use bitwise AND to calculate the nearest multiple of 4 length
            length_to_keep = len(s) & ~3  # Clear the last two bits, getting the maximum multiple of 4 length
            s = s[:length_to_keep]

            try:
                # Use 'replace' mode, special characters('\uFFFD','\x00') will appear for decoding errors
                base64_decoded = base64.b64decode(s).decode('utf-8', errors='replace')
                # Check the content after decoding
                if '\uFFFD' in base64_decoded:  # appear special characters ,means decoding errors
                    return f"'{s}'"  # Not base64 string, return the original string
                if '\x00' in base64_decoded:
                    return f"'{s}'"  # Return the original string
                # Replace \n \r
                base64_decoded_cleaned = base64_decoded.replace('\n', ' ').replace('\r', ' ')
                return f"'{base64_decoded_cleaned}'"  # Return Base64 decoded result with single quotes
            except Exception as e:
                print(f"Base64 decoding failed or not Base64 string: {s}, Error: {e}")

    return f"'{s}'"  # If decoding conditions are not met, return the original string with single quotes


def should_append_result(prefix, suffix):
    """The second filtering result"""
    # Use regex to filter the following prefixes with empty suffixes
    if ((re.match(r'^CONCAT$', prefix) or
         re.match(r'^SEND_.*', prefix) or
         re.match(r'^(ASSIGN.*|.*ASSIGN)$', prefix) or  # Combine filters for ASSIGN prefix and suffix
         prefix in {"OP_DATA", "ECHO", "CAST", "ADD", "SUB", "MUL", "DIV", "MOD", "RECV_INIT"} or
         re.match(r'^FETCH_.*', prefix) or
         re.match(r'^ROPE_.*', prefix) or
         re.match(r'^BW_.*', prefix) or
         re.match(r'^IS_.*', prefix) or
         re.match(r'^BIND_.*', prefix) or
         re.match(r'^ISSET_.*', prefix) or
         re.match(r'^PRE_.*', prefix) or
         re.match(r'^UNSET_.*', prefix) or
         re.match(r'.*_ARG$', prefix) or
         re.match(r'.*_SILENCE$', prefix)) and not suffix):
        return False  # Do not add

    # filter prefixes containing "ARRAY" with empty suffix
    if re.search(r'ARRAY', prefix) and not suffix:
        return False  # Do not add
    # filter prefixes containing "EQUAL" with empty suffix
    if re.search(r'EQUAL', prefix) and not suffix:
        return False  # Do not add
    # filter the following prefixes with digital suffixes
    if ((re.match(r'^CONCAT$', prefix) or
         re.match(r'^SEND_.*', prefix) or
         re.match(r'^(ASSIGN.*|.*ASSIGN)$', prefix) or
         prefix in {"OP_DATA", "RECV_INIT"} or
         re.match(r'^FETCH_.*', prefix) or
         re.match(r'^IS_.*', prefix) or
         re.match(r'^BIND_.*', prefix) or
         re.match(r'^UNSET_.*', prefix) or
         re.match(r'^ROPE_.*', prefix) or
         re.match(r'.*_ARG$', prefix) or
         re.match(r'^IS_.*', prefix)) and suffix.isdigit()):
        return False  # Do not add

    return True  # Add


def extract_columns_from_lines(lines):
    result_lines = []  # To save result lines
    for line in lines:
        parts = line.split('|')  # Split line by pipe

        # Filter entire line
        if should_filter_line(parts):
            continue  # Skip the entire line

        if len(parts) >= 5:  # Ensure there are at least five elements
            prefix = parts[4]  # Fourth pipe content is the opcode instruction

            # Eighth pipe content are operands
            suffix_parts = parts[8:]
            filtered_suffix = filter_suffix_parts(suffix_parts)  # Filter suffix parts

            # Truncate
            truncated_suffix = truncate_suffix_elements(filtered_suffix)

            # Decoding
            decoded_suffix = truncated_suffix
            for _ in range(3):  # Decode each element three times
                decoded_suffix = [decode_string(part) for part in decoded_suffix]

            # Filter out empty strings and join results
            suffix = ' '.join(s for s in decoded_suffix if s)  # Join decoded suffix, only joining non-empty strings
            if should_append_result(prefix, suffix):  # The second filtering
                result = f"{prefix} {suffix}"  # Join results
                result_lines.append(result)  # Add to result line list

    return result_lines  # Return the result line list


def print_progress_bar(iteration, total, length=40):
    percent = (iteration / total) * 100
    filled_length = int(length * iteration // total)
    bar = '█' * filled_length + '-' * (length - filled_length)
    sys.stdout.write(f'\r|{bar}| {percent:.2f}% Complete')
    sys.stdout.flush()


def main(directory_path, output_directory):
    # Get all files in the directory
    files = [f for f in os.listdir(directory_path) if os.path.isfile(os.path.join(directory_path, f))]

    if not files:
        print("There are no files in this directory.")
        return

    # Ensure the output directory exists
    os.makedirs(output_directory, exist_ok=True)

    successful_count = 0  # Count of successfully processed files
    total_files = len(files)

    for index, file_name in enumerate(files):
        file_path = os.path.join(directory_path, file_name)
        # print(f"\nProcessing file: {file_name}")

        # Extract specified lines
        extracted_lines = extract_lines_from_file(file_path)

        # Extract required content from the extracted lines
        result_lines = extract_columns_from_lines(extracted_lines)

        # Generate output file path
        output_file_path = os.path.join(output_directory, file_name)

        # If content has been extracted, write to file
        if result_lines:
            with open(output_file_path, 'w', encoding='utf-8') as output_file:
                output_file.write("\n".join(result_lines))
            # print(f"Processing result written to: {output_file_path}")
            successful_count += 1
        else:
            print(f"No content extracted that meets the criteria, file: {file_name}")

        # Update progress bar
        print_progress_bar(index + 1, total_files)

    print(f"\nProcessing complete, total successfully processed files: {successful_count}/{total_files}")


if __name__ == "__main__":
    directory = r"./opcode"  # Input directory
    output_directory = r"./processed_opc"  # Output directory
    main(directory, output_directory)
