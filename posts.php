<?php
/**
 * Custom template for the "Post Grid" plugin integration
 *
 * This template is replacing the default UM template at .../templates/profile/posts.php
 *
 * Page: "Profile"
 *
 * @version 2.6.1
 *
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_grid_id = '6554';

add_filter( 'post_grid_filter_query_args', 'um_post_grid_filter_query_args', 10, 2 );
    
function um_post_grid_filter_query_args( $query_args, $grid_id ) {

    $query_args['author'] = um_profile_id();
    return $query_args;
}

if ( version_compare( get_bloginfo( 'version' ), '5.4', '<' ) ) {
    echo do_shortcode( '[post_grid id="' . $post_grid_id . '"/]' );
} else {
    echo apply_shortcodes( '[post_grid id="' . $post_grid_id . '"/]' );
}
