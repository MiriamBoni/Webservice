<?php

function ValidString($pValue){   //esta función valida que el parámetro tenga al menos 1 caracter como valor
    if (strlen($pValue)<1){
        return 6000;
    }else{
        return 0;
    }
}
function ValidNumber($pValue){  
    if (is_numeric($pValue)){
        return 0;
    }else{
        return 5010;
    }
}
function ValidInString($pValue){  
    if (str_contains($pValue, "hola")){
        return 0;
        
    }else{
        return 5555;
        
    }
}
function isType ($pP1){  
    if (is_numeric($pP1)){
        if (ctype_digit($pP1)){;
            settype($pP1,"integer");
            return gettype($pP1);
        }
        else{ 
            settype($pP1,"float");
            return gettype($pP1);
            
        }
   
    
    }
};

?>