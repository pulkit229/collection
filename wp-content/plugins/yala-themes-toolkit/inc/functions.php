<?php
function yalathemes_toolkit_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function yalathemes_toolkit_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function yalathemes_toolkit_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}