<?php
/**
 * Plugin Name: Easy Markdown
 * Plugin URI:  http://davidwells.io/
 * Description: Write in Markdown, publish in WordPress.
 * Version:     0.2.0
 * Author:      Evan Solomon, Matt Wiebe, David Wells, Jan Boddez
 *
 * @package Easy_Markdown
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require dirname( __FILE__ ) . '/includes/class-wpcom-markdown.php';

add_action( 'init', array( WPCom_Markdown::get_instance(), 'load' ) );
