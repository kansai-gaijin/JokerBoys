<?php

namespace JokerB\Theme\App\Structure;

/*
|----------------------------------------------------------------
| Theme Custom Fields
|----------------------------------------------------------------
|
| This file is for registering your theme custom field groups and fields.
|
*/

use function JokerB\Theme\App\config;
use function JokerB\Theme\App\template;

/**
 * Register metabox for Cast
 *
 * @return void
 */
function jokerb_add_meta_boxes()
{
    $meta_groups = array(
        array(
            name => "基本情報",
            slug => "cast_info",
            post_types => array('cast'),
            fields => array(
                array(
                    'name' => 'test name',
                    'slug' => 'testslug',
                    'field_type' => 'text',
                    'placeholder' => 'put your text here',
                ),
                array(
                    'name' => 'test field',
                    'slug' => 'testslug2',
                    'field_type' => 'text',
                    'placeholder' => 'put your text here',
                ),
                array(
                    'name' => 'test field 3',
                    'slug' => 'testslug3',
                    'field_type' => 'gallery',
                ),
            )
        ),
    );

    foreach ($meta_groups as $key => $group) {
        add_meta_box(
            $group['slug'],
            $group['name'],
            function($post, $fields){
                template('metaboxes/form',['fields' => $fields]);
            },
            $group['post_types'],
            'advanced',
            'high',
            $group['fields']
        );
    }
}
add_action('add_meta_boxes', 'JokerB\Theme\App\Structure\jokerb_add_meta_boxes');