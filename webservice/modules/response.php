<?php
$error_desc=getError($err);
$xmlsrt=<<<XML
    <response>
        <datetime>$date</datetime>
        <call_params>
            <method>$method</method>
            <p1>$p1</p1>
            <p2>$p2</p2>
        </call_params>
        <error_info>
            <error_code>$err</error_code>
            <error_description>$error_desc</error_description>
        </error_info>
        <response_info>
            <response>$res</response>
        </response_info>
    </response>
XML;
header("Content-Type:text/xml");
$xml =new SimpleXMLElement($xmlsrt);

?>