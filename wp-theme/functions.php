<?php
function theme_enqueue_assets() {
    wp_enqueue_script(
        'theme-js', 
        get_template_directory_uri() . '/assets/dist/app.bundle.js', 
        array(), // Dependencies (none for now)
        null, // Version (null for dev)
        true  // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
