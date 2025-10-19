<?php

// CSS and JS files
function sm_styles(){
    wp_enqueue_style('style', get_template_directory_uri().'/archive/css/style.css');
    wp_enqueue_script('script', get_template_directory_uri().'/archive/js/script.js');
}
add_action('wp_enqueue_scripts', 'sm_styles');

// Thumbnail
function sm_config(){
    add_theme_support( 'post-thumbnails', array( 'clietes', 'perfl' ) );
}
add_action( 'after_setup_theme', 'sm_config', 0);

//Remove a notificação de atualização
add_action( 'admin_head', 'hide_update_notice_to_all', 1 );
function hide_update_notice_to_all(){
    remove_action( 'admin_notices', 'update_nag', 3 );
}

//Remove o menu de atualização
add_action( 'admin_init', 'remove_menu_update' );
function remove_menu_update(){
    remove_submenu_page( 'index.php', 'update-core.php' );
}

//Remove o icone de atualização na barra administrativa
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ){
    $wp_admin_bar->remove_node( 'updates' );
}
?>