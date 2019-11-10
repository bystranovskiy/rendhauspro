<?php

function register_post_type_projects() {

    register_post_type( 'projects',
        array(
            'labels' => array(
                'name'          => 'Проекты',
                'singular_name' => 'Проект', // админ панель Добавить->Функцию
                'add_new'       => 'Создать',
                'add_new_item'  => 'Добавить новый проект', // заголовок тега <title>
                'edit_item'     => 'Редактировать проект',
                'new_item'      => 'Новый проект',
                'all_items'     => 'Все проекты',
                'view_item'     => 'Просмотр проекта на сайте',
                'search_items'  => 'Искать проекты',
                'not_found'     =>  'Проектов не найдено.',
                'menu_name'     => 'Проекты' // ссылка в меню в админке
            ),
            'menu_icon'     => 'dashicons-admin-multisite',
            'public'        => true,
            'has_archive'   => true,
            'hierarchical'  => true,
            'supports'      => array('title','editor','thumbnail'),
            'rewrite'       => array('slug' => 'projects'),
        )
    );
}

add_action( 'init', 'register_post_type_projects' );