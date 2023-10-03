<?php
/**
 * Página 404 - redirige automaticamente al inicio
 * 
 * En este caso hay que crear o modificar el fichero "404.php" del tema activo y añadir
 * el siguiente código.
 * 
 */

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();