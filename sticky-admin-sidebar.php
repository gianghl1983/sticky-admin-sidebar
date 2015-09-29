<?php
/*
Plugin Name: Sticky Admin Sidebar
Plugin URI:  https://github.com/jgillyon/sticky-admin-sidebar
Description: Sticks the post sidebar in wp-admin so it's always in view
Version:     0.1
Author:      Jason Gillyon
Author URI:  http://jasongillyon.co.uk
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Load the admin JavSscript
 * @param  string $hook
 * @return mixed
 */
function sticky_admin_sidebar_script ( $hook ) {
	// Only load on new or edit post screen
    if ( !in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {
        return;
    }

    // Load the script
    wp_enqueue_script( 'sticky_admin_sidebars', plugin_dir_url( __FILE__ ) . 'assets/sticky-admin-sidebar.js', array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'sticky_admin_sidebar_script' );