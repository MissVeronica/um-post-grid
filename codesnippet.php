<?php
add_filter( 'um_profile_tabs', 'um_profile_tabs_filter_posts_count', 9999, 1 );
function um_profile_tabs_filter_posts_count( $tabs ) {
    if ( isset( $tabs['posts'] ) && ! isset( $tabs['posts']['notifier'] )) {
        $count_user_posts = count_user_posts( um_profile_id(), 'post', false );
        if ( $count_user_posts == '0' ) {
            $count_user_posts = esc_html__( 'No', 'ultimate-member' );
        }
        $tabs['posts']['notifier'] = $count_user_posts;
    }
    return $tabs;
}
