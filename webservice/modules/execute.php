<?php
// echo "<br>---------------------------------------Module EXECUTE";

function ExecuteMethod($pMethod, $pP1, $pP2, $pP3){

    $err=0;
    global $res;
    switch ($pMethod){
        case "lcase":
            $res=strtolower($pP1);
            break;
        case "ucase":
            $res=strtoupper($pP1);
            break;
        case "capitalize":
            $res=ucwords($pP1);
            break;
        case "equals":
            $res=strcmp($pP1, $pP2);
            break;
        case "is_numeric":
            $res=is_numeric($pP1);
            break;
        case "in_string":
            $res=str_contains($pP1, 'hola');
            break;
        case "sumar":
            $res=($pP1+$pP2);
            break;
        case "reverse": 
            $res=strrev($pP1);
            break;
        case "is_type": 
            $res=isType($pP1);
            break;
        case "strlen":
            $res=strlen($pP1);
            break;
    }
    return $err;

}

if ($err==0){
    $err=ExecuteMethod($method, $p1 , $p2 , $p3);

}
?>