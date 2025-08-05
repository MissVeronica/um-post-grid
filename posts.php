<?php
/**
 * Custom template for the "Post Grid" plugin
 *
 * This template can be overridden by copying it to your-theme/ultimate-member/profile/posts.php
 *
 * Page: "Profile"
 *
 * @version 2.6.1
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_grid_id = '6552';

if ( version_compare( get_bloginfo( 'version' ), '5.4', '<' ) ) {
    echo do_shortcode( '[post_grid id="' . $post_grid_id . '"/]' );
} else {
    echo apply_shortcodes( '[post_grid id="' . $post_grid_id . '"/]' );
}
