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
                  'name' => '源氏名',
                  'slug' => 'cast-name',
                  'field_type' => 'text',
                  'placeholder' => 'キャストの表示するお名前',
                  'required' => true
              ),
              array(
                'name' => 'フリガナ',
                'slug' => 'cast-furigana',
                'field_type' => 'text',
                'placeholder' => '源氏名のフリガナ',
                'required' => false
              ),
              array(
                'name' => '生年月',
                'slug' => 'cast-birthday',
                'field_type' => 'date',
                'placeholder' => 'キャストの誕生日',
                'required' => true
              ),
              array(
                'name' => '血液型',
                'slug' => 'cast-bloodtype',
                'field_type' => 'dropdown',
                'options' => array(
                  array(
                    'name' => 'A型',
                    'value' => 'A'
                  ),
                  array(
                    'name' => 'B型',
                    'value' => 'B'
                  ),
                  array(
                    'name' => 'AB型',
                    'value' => 'AB'
                  ),
                  array(
                    'name' => 'O型',
                    'value' => 'O'
                  ),
                ),
              ),
              array(
                'name' => '身長',
                'slug' => 'cast-height',
                'field_type' => 'number',
                'placeholder' => 'キャストの身長',
                'required' => true
              ),
              array(
                'name' => '体重',
                'slug' => 'cast-weight',
                'field_type' => 'number',
                'placeholder' => 'キャストの体重',
                'required' => true
              ),
              array(
                'name' => '出張可能地域',
                'slug' => 'cast-area',
                'field_type' => 'text',
                'placeholder' => 'キャストの出張可能なエリア',
                'required' => true
              ),
              array(
                'name' => '出張可能時間',
                'slug' => 'cast-time',
                'field_type' => 'text',
                'placeholder' => 'キャストの出張可能なエリア',
                'required' => true
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

function jokerb_save_meta_data($post_id){
  if (array_key_exists('jbf', $_POST)):
    foreach($_POST['jbf'] as $key=>$val):
      update_post_meta(
        $post_id,
        $key,
        $val
      );
    endforeach;
  endif;
}
add_action('save_post', 'JokerB\Theme\App\Structure\jokerb_save_meta_data');