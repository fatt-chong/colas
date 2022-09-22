<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


$ruta = "C:\Windows\System32\spool\PRINTERS";
if (is_dir($ruta)){
    // Abre un gestor de directorios para la ruta indicada
    $gestor = opendir($ruta);
    // echo "<ul>";

    // Recorre todos los elementos del directorio
    while (($archivo = readdir($gestor)) !== false)  {
            
        $ruta_completa = $ruta . "/" . $archivo;

        // Se muestran todos los archivos y carpetas excepto "." y ".."
        if ($archivo != "." && $archivo != "..") {
            // Si es un directorio se recorre recursivamente
            if (!is_dir($ruta_completa)) {
                // echo "<li>" . $archivo . "</li>";
                unlink($ruta . "/".$archivo);
            }
        }
    }
    
    // Cierra el gestor de directorios
    closedir($gestor);
    echo json_encode(array("message"=>"Se borraron las colas de impresion", "code"=>200));
    // echo "</ul>";
}// else {
//     echo "No es una ruta de directorio valida<br/>";
// }
?>