<?php

function ErrorInfo ($error_desc){
    switch ($err){
        case "6000":
            $error_desc="String inferior a 1 caracter";
            break;
        case "5010":
            $error_desc="No es un caracter numerico";
            break;
        case "5555":
            $error_desc="Error la palabra no está en el string";
            break;
        case "5050":
            $error_desc="No es un string";
            break;
        case "5001":
            $error_desc="Método sin definir";
            break;
        case "0":
            $error_desc="Correcto";
            break;
    
    }
    return $error_desc ;

}


?>
