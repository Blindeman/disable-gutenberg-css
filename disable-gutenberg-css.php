<?php
/**
 * Plugin Name: Disable Gutenberg CSS
 * Plugin URI: https://wordpress.org/support/topic/block-editor-assets-still-enqueued/
 * Github plugin URI: https://github.com/Blindeman/disable-gutenberg-css
 * Description: Don't load CSS for Gutenberg if you have no intention of using it
 * Version: 0.0.1
 * Author: No one
 * License: GNU General Public License
 * License URI: https://www.gnu.org/licenses/gpl.html
 */

defined( 'ABSPATH' ) or die;

function remove_gb_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_gb_css', 100 );