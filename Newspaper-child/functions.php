<?php
/*  ----------------------------------------------------------------------------
    Newspaper 7 Child theme - Please do not use this child theme with older versions of Newspaper Theme

    What can be overwritten via the child theme:
     - everything from /parts folder
     - all the loops (loop.php loop-single-1.php) etc

     - the rest of the theme has to be modified via the theme api:
       http://forum.tagdiv.com/the-theme-api/

 */




/*  ----------------------------------------------------------------------------
    add the parent style + style.css from this folder
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1001);
function theme_enqueue_styles() {
    wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.css', '', '6.1c', 'all' );
    wp_enqueue_style('td-theme-child', get_stylesheet_directory_uri() . '/style.css', array('td-theme'), '6.1c', 'all' );

}

// custom taxonomy permalinks
add_filter('post_link', 'thewedding_permalink', 10, 3);
add_filter('post_type_link', 'thewedding_permalink', 10, 3);


function thewedding_permalink($permalink, $post_id, $leavename) {
        if (strpos($permalink, '%tipeinspirasi%') === FALSE) return $permalink;


        // Get post
        $post = get_post($post_id);
        if (!$post) return $permalink;


        // Get taxonomy terms
        $terms = wp_get_object_terms($post->ID, 'tipeinspirasi');
        if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) $taxonomy_slug = $terms[0]->slug;
        else $taxonomy_slug = 'other';


        return str_replace('%tipeinspirasi%', $taxonomy_slug, $permalink);
}

function getPostID($parent,$posttype){
	 $args = array(
	 'meta_key'=>'wpcf-id-data',
	 'meta_value'=>$parent,
	 'post_type'=>$posttype,
	 );
	 $query = new WP_Query( $args );
	 $query->the_post();
	return  get_the_id();
	//return $posttype;

}



function my_remove_metabox() {
    if ( ! current_user_can( 'install_plugins' ) )
        remove_meta_box( 'wpseo_meta', 'post', 'normal' );
}
add_action( 'add_meta_boxes', 'my_remove_metabox', 11 );

//_______________modification essential grid-id-

/**
 * Exclude external scripts from WP Rocket’s file optimization.
 * @param  array  $external_js Array of script URL fragments
 * @return array               Extended array of script URL fragments
 */
function __fix_wprocket_excluded_external_js( $external_js ) {

	/**
	 * Replace with your external script URL part.
	 */
	$external_js[] = 'das.uadexchange.com';

	return $external_js;
}
add_filter( 'rocket_minify_excluded_external_js', '__fix_wprocket_excluded_external_js' );
