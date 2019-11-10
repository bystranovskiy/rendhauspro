<?php

function register_post_type_furniture() {

    register_post_type( 'furniture',
        array(
            'labels' => array(
                'name'          => 'Мебель',
                'singular_name' => 'Мебель', // админ панель Добавить->Функцию
                'add_new'       => 'Создать',
                'add_new_item'  => 'Добавить новую мебель', // заголовок тега <title>
                'edit_item'     => 'Редактировать мебель',
                'new_item'      => 'Новая мебель',
                'all_items'     => 'Вся мебель',
                'view_item'     => 'Просмотр мебели на сайте',
                'search_items'  => 'Искать мебель',
                'not_found'     =>  'Мебель не найдено.',
                'menu_name'     => 'Мебель' // ссылка в меню в админке
            ),
            'menu_icon'     => 'dashicons-editor-table',
            'public'        => true,
            'has_archive'   => true,
            'hierarchical'  => true,
            'supports'      => array('title','editor','thumbnail'),
            'rewrite'       => array('slug' => 'furniture'),
        )
    );
}

add_action( 'init', 'register_post_type_furniture' );