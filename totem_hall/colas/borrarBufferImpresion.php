<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
shell_exec('C:\AppServ\www\Base\colas\detenerImpresora.bat'); //ruta en appServ: C:\AppServ\www\Base\colas\detenerImpresora.bat, ruta en iss: ?
shell_exec('C:\AppServ\www\Base\colas\iniciarImpresora.bat'); //ruta en appServ: C:\AppServ\www\Base\colas\iniciarImpresora.bat, ruta en iss: ?
echo json_encode(array("status"=>"realizado", "code"=>200));
?>