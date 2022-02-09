<?php
// echo "<br>-----------------------------------Módulo VALIDATE";

//Validar si el método existe/

//////////////////////////////////////////////////////validaremos el método que pasara por el parametro method, el cual lo estableceremos en la url
function _ValidateMethodExists($pMethod){

    $method_list = array('lcase', 'ucase', 'reverse', 'sumar', 'is_numeric', 'in_string', 'checkdate', 'reverse','capitalize', 'equals', 'is_type', 'listmethods', 'strlen');

    if (in_array($pMethod, $method_list, TRUE)) {
        return 0; #si el método existe devolverá error 0 (no hay error)
    }else{
        return 5001; #sino devuelve este num
    };
}
//////////////////////////////////////////////////////
function _ValidateParamsForThisMethod($pMethod, $pP1,$pP2){
    $err=99999999;
    switch ($pMethod){
        case "lcase":
            $err=ValidString($pP1);
            break;
        case "ucase":
            $err=ValidString($pP1);
            break;
        case "capitalize":
            $err=ValidString($pP1);
            break;
        case "equals":
            $err=ValidString($pP1, $pP2);
            break;
        case "reverse":
            $err=ValidString($pP1);
            break;
        case "is_numeric":
            $err=ValidNumber($pP1);
            break;
        case "in_string":
            $err=ValidInString($pP1);
            break;
        case "sumar":
            $err=ValidNumber($pP1,$pP2);
            break;
        case "checkdate":
            $err=ValidString($pP1);
            break;
        case "is_type":
            $err=isType($pP1);
            break;
        case "listmethods":
            $err=ValidString($pP1); //no funciona
            break;
        case "strlen":
            $err=ValidString($pP1);
            break; 
    }
    return $err;
};
//////////////////////////////////////////////////////

$err= _ValidateMethodExists($method);

if ($err==0){
   $err= _ValidateParamsForThisMethod($method,$p1,$p2);
}
?>