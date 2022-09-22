<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
$ruta = "C:/Windows/System32/spool/PRINTERS";
$contador = count(glob($ruta."/{*.SHD,*.SPL}",GLOB_BRACE));
echo json_encode(array("colas"=> $contador, "code"=>200));
?>