<?php

namespace Tonik\Theme\App\Structure\ACF;

use function JokerB\Theme\App\config;

acf_add_options_page([
    'page_title' => __('Joker Boys Settings', config('textdomain')),
    'menu_title' => __('Joker Boys Settings', config('textdomain')),
    'menu_slug' => 'theme-settings',
    'capability' => 'edit_posts',
    'redirect' => false
]);