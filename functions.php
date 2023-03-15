<?php

define('MZX_URL', get_template_directory_uri() . '/');
define('MZX_PATH', get_template_directory() . DIRECTORY_SEPARATOR);
define('MZX_APP', MZX_PATH . DIRECTORY_SEPARATOR .'app');

add_action('after_setup_theme', 'mzx_setup');

function mzx_setup()

{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

}

register_nav_menu('top-bar', 'top bar menu');

if (is_admin())
{
    include MZX_APP . '/admin/admin.php';
}
include MZX_APP . '/user/user.php';