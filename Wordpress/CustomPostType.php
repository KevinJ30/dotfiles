<?php

/**
 * Déclaration d'un CustomPostType
 **/

class KevinJ30_CustomPostType {


    public function __construct() {
        add_action('init', [$this, 'register_post_type']);
    }

    public function register_post_type() {
        $label = [
			'name' => _x('<Name Post Type>', 'Post Type General Name'),
			'singular_name' => _x('<Singular Name Post Type>', 'Post Type Singular Name'),
			'menu_name' => __('<Menu name>'),
			'all_items' => __('<Archive Name>'),
			'view_item' => __('<View Name>'),
			'add_new_item' => __('<View Add name>'),
			'add_new' => __('<Button name>'),
			'edit_item' => __('<View Edit Name>'),
			'update_item' => __('<View Update name>'),
			'search_items' => __('<View Search Name>'),
			'not_found' => __("<Not found name>"),
			'not_found_in_trash' => __('<Not found in trash Name>')
        ];
        
        $args = [
			'label' => __('<Label Name>'), // Label 
			'description' => __('<Description>'), // Description
			'labels' => $this->labels, // Inject labels vars
			'supports' => array('title'), // Field wordpress support
			'show-in-rest' => false, // Show in rest
			'hierachical' => false,
			'public' => true,
			'has_archive' => true,
			'rewrite' => ['slug' => 'carrousel'], // Slug
			'menu_icon' => 'dashicons-images-alt2' // Icon menu
        ];
        
        register_post_type('<Post Type Name>', $args);
    }

}