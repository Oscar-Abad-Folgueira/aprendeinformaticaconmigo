<?php
/**
 * @snippet       WordPress: Comprobar si la entrada actual tiene asignada imagen destacada
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.aprendeinformaticaconmigo.com/desarrollo/wordpress/wordpress-comprobar-la-entrada-post-tiene-asignada-una-imagen-destacada-y-si-es-asi-mostrarla-en-tamano-medium/
 */

/**
 * Código que comprueba si el post actual tiene imagen destacada asignada.
 *
 * Si tiene, la muestra.
 * 
 */

function oaf_check_has_featured_image(){
    
	// comprobar si es un singe de tipo post
	if( is_singular( 'post' ) ){
	
		// Comprobar si tiene imagen destacada asignada
		if(has_post_thumbnail()){
			
			// si la tiene, mostrarla a tamaño 'medium'
			echo get_the_post_thumbnail(get_the_ID(), 'medium');
		} else {

			echo "Pues NO. Parece que tenga imagen";
		}
	}
}
add_action( "template_redirect", "oaf_check_has_featured_image" );