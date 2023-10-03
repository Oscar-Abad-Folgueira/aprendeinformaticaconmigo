<?php

/**
 * @snippet       WordPress: Página 404 - redirige automaticamente al inicio
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.aprendeinformaticaconmigo.com/desarrollo/wordpress/wordpress-redireccionar-todas-las-pagina-no-encontrada-a-la-pagina-de-inicio/
 */

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