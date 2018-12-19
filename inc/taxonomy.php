<?php
//add_action('init', 'custom_page');
//
//// create two taxonomies, genres and writers for the post type "book"
//function custom_page()
//{
//// Add new taxonomy, make it hierarchical (like categories)
//    $labels = array(
//        'name' => 'Laravel',
//        'singular_name' => 'Laravel',
//        'search_items' => 'جستوجو برای صفحه',
//        'all_items' => 'تمامی صفحات',
//        'parent_item' => 'صفحه مادر',
//        'parent_item_colon' => 'Parent Genre:',
//        'edit_item' => 'ویرایش صفحات',
//        'update_item' =>'ویرایش صفحات',
//        'add_new_item' => 'افزودن صفحه جدید',
//        'new_item_name' => 'نام آیتم جدید',
//        'menu_name' => 'صفحه سفارشی',
//    );
//
//    $args = array(
//        'hierarchical' => true,
//        'labels' => $labels,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'laravel'),
//    );
//
//    register_taxonomy('CustomPage', ['page'], $args);
//
//// Add new taxonomy, NOT hierarchical (like tags)
//}
//
//?>