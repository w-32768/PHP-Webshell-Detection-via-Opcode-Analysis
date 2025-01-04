import subprocess
import os
import shutil

def execute_command(command, output_file):
    try:
        # Execute the command and capture output, encoding as utf-8
        result = subprocess.run(command, shell=True, text=True, capture_output=True, encoding='utf-8')

        # Write to file only when the command is executed successfully
        if result.returncode == 0:
            with open(output_file, 'w', encoding='utf-8') as file:
                if result.stderr:
                    file.write(result.stderr)

            print(f"Command executed successfully and output saved to {output_file}.")
        else:
            print(f"Command execution failed. {output_file} not saved to file.")
            print("Standard Error:", result.stderr)
            return False
    except Exception as e:
        print(f"An error occurred: {e}")
        return False
    return True

def move_error_files(error_files, error_dir):
    for file_path in error_files:
        try:
            shutil.move(file_path, error_dir)
            print(f"Moved error file {file_path} to {error_dir}.")
        except Exception as e:
            print(f"Failed to move error file {file_path}: {e}")

# Define input directory path
input_dir = r"./samples"

# Define output directory path
output_dir = r"./opcode"

# Define directory for storing error files
error_dir = r"./error"

# Ensure output directory and error directory exist
os.makedirs(output_dir, exist_ok=True)
os.makedirs(error_dir, exist_ok=True)

# Record error files
error_files = []

# Scan all files in the input directory
for root, dirs, files in os.walk(input_dir):
    for file_name in files:
        input_file = os.path.join(root, file_name)
        output_file_name = file_name + ".txt"
        output_file = os.path.join(output_dir, output_file_name)

        # Execute PHP command ,PHP source code to opcode
        print(f"\nExecuting PHP command for {input_file}...")
        if not execute_command(f'php -d vld.active=1 -d vld.execute=0 -d vld.format=1 -d vld.col_sep="|" -d vld.verbosity=0 -d vld.save_paths=0 -d vld.dump_paths=1 -dvld.skip_prepend=1 {input_file}', output_file):
            error_files.append(input_file)

# Move error files to the error directory
move_error_files(error_files, error_dir)
