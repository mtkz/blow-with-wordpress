<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_filter('show_admin_bar', '__return_false');


function setup_menu()
{
    $menus = ['top_menu' => 'A menu For top'];
    register_nav_menus($menus);
}

function add_learn_programming_post_type()
{
    $labels = ['name' => 'آموزش برنامه نویسی',
        'singular_name' => 'آموزش برنامه نویسی',
        'menu_name' => 'آموزش برنامه نویسی',
        'name_admin_bar' => 'آموزش برنامه نویسی',
        'add_new' => 'افزودن',
        'add_new_item' => 'افزودن پست جدید',
        'new_item' => 'آمورش جدید',
        'edit_item' => 'ویرایش',
        'view_item' => 'نمایش پست',
        'all_items' => 'تمام پست ها',
        'search_items' => 'جستو و جوی پست',
        'parent_item_colon' => 'Parent Post:',
        'not_found' => 'پستی پیدا نشد',
        'not_found_in_trash' => 'زباله دان خالی'];

    $args = ['labels' => $labels,
        'description' => 'ساخت پست آموزشی',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'learn-programming'),
        'menu_icon' => 'dashicons-editor-code',
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')];

    register_post_type('learn_programming', $args);

}

add_image_size('th_size', 1200, 500, false);


add_action('after_setup_theme', 'setup_menu');
add_action('init', 'add_learn_programming_post_type');


get_template_part('inc/taxonomy');

function mt_box_for_lp()
{

    $screen = ['learn_programming'];
    add_meta_box(
        'lp_box',
        'آموزش متا باکس',
        'show_pl_func',
        $screen,
        'side'
    );

    function show_pl_func()
    {
        echo '<input type="text" class="input widefat">';
    }

}

add_action('add_meta_boxes', 'mt_box_for_lp');

include get_template_directory() . '/shortcodes.php';