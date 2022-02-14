<?php
// echo "Welcome to my Web Service";


include_once("modules/tools.php");
include_once("modules/getparams.php");

include_once("modules/validate.php");  
include_once("modules/execute.php");
include_once("modules/error_desc.php");


include_once("modules/response.php");
echo $xml ->asXML();


// echo "<br> PRINT RESPONSE = ";
// echo $res;
// echo "<br>PRINT ERROR = ";
// echo $err;
// echo $xml;
?>