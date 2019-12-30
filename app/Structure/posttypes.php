<?php

namespace JokerB\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Custom Post Types
|-----------------------------------------------------------
|
| This file is for registering your theme post types.
| Custom post types allow users to easily create
| and manage various types of content.
|
*/

use function JokerB\Theme\App\config;

/**
 * Registers `cast` custom post type.
 *
 * @return void
 */
function register_cast_post_type()
{
    register_post_type('cast', [
        'description' => __('キャストのコレクション', config('textdomain')),
        'public' => true,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'labels' => [
            'name' => _x('キャスト管理', 'post type general name', config('textdomain')),
            'singular_name' => _x('キャスト', 'post type singular name', config('textdomain')),
            'menu_name' => _x('キャスト管理', 'admin menu', config('textdomain')),
            'name_admin_bar' => _x('キャスト管理', 'add new on admin bar', config('textdomain')),
            'add_new' => _x('キャスト追加', 'cast', config('textdomain')),
            'add_new_item' => __('キャスト追加', config('textdomain')),
            'new_item' => __('キャスト追加', config('textdomain')),
            'edit_item' => __('キャスト編集', config('textdomain')),
            'view_item' => __('キャストを表示', config('textdomain')),
            'all_items' => __('キャスト一覧', config('textdomain')),
            'search_items' => __('キャスト検索', config('textdomain')),
            'parent_item_colon' => __('親キャスト:', config('textdomain')),
            'not_found' => __('キャスト見つかりません。', config('textdomain')),
            'not_found_in_trash' => __('ゴミ箱にキャストいません。', config('textdomain')),
        ],
    ]);
}
add_action('init', 'JokerB\Theme\App\Structure\register_cast_post_type');

/**
 * Registers `cast-blog` custom post type.
 *
 * @return void
 */
function register_cast_blog_post_type()
{
    register_post_type('cast-blog', [
        'description' => __('キャストブログコレクション', config('textdomain')),
        'public' => true,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'labels' => [
            'name' => _x('キャストブログ', 'post type general name', config('textdomain')),
            'singular_name' => _x('投稿', 'post type singular name', config('textdomain')),
            'menu_name' => _x('キャストブログ管理', 'admin menu', config('textdomain')),
            'name_admin_bar' => _x('キャストブログ管理', 'add new on admin bar', config('textdomain')),
            'add_new' => _x('新規', 'cast-blog', config('textdomain')),
            'add_new_item' => __('新規投稿', config('textdomain')),
            'new_item' => __('新規投稿', config('textdomain')),
            'edit_item' => __('投稿編集', config('textdomain')),
            'view_item' => __('投稿を表示', config('textdomain')),
            'all_items' => __('投稿一覧', config('textdomain')),
            'search_items' => __('投稿検索', config('textdomain')),
            'parent_item_colon' => __('親投稿:', config('textdomain')),
            'not_found' => __('投稿見つかりません。', config('textdomain')),
            'not_found_in_trash' => __('ゴミ箱に投稿ありません。', config('textdomain')),
        ],
    ]);
}
add_action('init', 'JokerB\Theme\App\Structure\register_cast_blog_post_type');