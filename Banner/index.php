<?php 
/*
Plugin Name: Custom Banner
Description: Adiciona um banner personalizado na parte superior do site.
Version: 1.0
Author: Guilherme <guilhermersouza34@gmail.com>
*/

function custom_banner_display() {
    $banner_text = get_option('custom_banner_text', 'Bem-vindo ao nosso site!');
    echo "<div style='background-color: #ff0000; color: #fff; text-align: center; padding: 10px;'>$banner_text</div>";
}
add_action('wp_head', 'custom_banner_display');

function custom_banner_menu() {
    add_options_page('Custom Banner Settings', 'Custom Banner', 'manage_options', 'custom-banner', 'custom_banner_options_page');
}
add_action('admin_menu', 'custom_banner_menu');

function custom_banner_options_page() {
    ?>
    <div class="wrap">
        <h1>Configurações do Banner Personalizado</h1>
        <form method="post" action="options.php">
            <?php settings_fields('custom_banner_settings_group'); ?>
            <?php do_settings_sections('custom-banner'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function custom_banner_settings_init() {
    add_settings_section('custom_banner_settings_section', 'Texto do Banner', null, 'custom-banner');
    
    add_settings_field('custom_banner_text', 'Texto do Banner', 'custom_banner_text_field', 'custom-banner', 'custom_banner_settings_section');
    
    register_setting('custom_banner_settings_group', 'custom_banner_text');
}

function custom_banner_text_field() {
    $text = get_option('custom_banner_text', 'Bem-vindo ao nosso site!');
    echo "<input type='text' name='custom_banner_text' value='" . esc_attr($text) . "' style='width: 100%;'/>";
}
add_action('admin_init', 'custom_banner_settings_init');