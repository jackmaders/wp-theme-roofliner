<?php
function roofliner_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}

add_action("init", "roofliner_theme_support");
