<?php
/**
 * @snippet       WordPress: Obtener todas las categorías de un post
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.aprendeinformaticaconmigo.com/desarrollo/wordpress/wordpress-obtener-todas-las-categorias-de-un-post-get_the_category/
 */

/**
 * Obtener listado de todas las categorías del post actual.
 */

function oaf_get_post_categories() {

	$categories = get_the_category( get_the_ID() );

	if ( ! empty( $categories ) ) {

		foreach( $categories as $category ) {

			echo "Categoria: " . esc_html( $category->name ) . "   ID -->  " . $category->term_id . "<br />";
		}

	}
	
}

add_action( "template_redirect", "oaf_get_post_categories" );