<?php
function theme_enqueue_assets() {
    wp_enqueue_script(
        'theme-js', 
        get_template_directory_uri() . '/assets/dist/app.bundle.js', 
        array(), 
        null, 
        true  
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
