<?php

function roofliner_register_styles()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "main",
        get_template_directory_uri() . "/assets/css/style.css",
        [],
        $version,
    );
}

function roofliner_register_scripts()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_script(
        "main",
        get_template_directory_uri() . "/assets/js/index.js",
        [],
        $version,
    );
}

function roofliner_meta_viewport()
{
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

add_action("wp_enqueue_scripts", "roofliner_register_styles");
add_action("wp_enqueue_scripts", "roofliner_register_scripts");

add_action("wp_head", "roofliner_meta_viewport", 1);