<?php

// Add scripts
function slw_add_script() {
	wp_enqueue_style( 'slw-main-style', plugins_url() . '/social-links/css/style.css' );
	wp_enqueue_script( 'slw-main-script', plugins_url() . '/social-links/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'slw_add_script' );

?>