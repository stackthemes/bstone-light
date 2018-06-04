<?php
/**
 * Register and load Bstone widgets
 *
 * @package Bstone Light
 * 
 * @since   Bstone Light 1.0.0
 */

function bstone_light_load_widgets() {
    register_widget( 'bstone_light_widget_search' );
    register_widget( 'bstone_light_widget_latest_articles' );
}

add_action( 'widgets_init', 'bstone_light_load_widgets' );