<?php

function register_taxonomy_projects()
{

    register_taxonomy('projects', array('projects'),
    
        array(
            'labels' => array(
                'name'          => 'Рубрики',
                'singular_name' => 'Рубрика',
                'search_items'  => 'Искать рубрику',
                'all_items'     => 'Все рубрики',
                'edit_item'     => 'Редактировать рубрику',
                'update_item'   => 'Обновить рубрику',
                'add_new_item'  => 'Добавить новую рубрику',
                'new_item_name' => 'Новая рубрика',
                'menu_name'     => 'Рубрики',
            ),
            'hierarchical'  => true,
            'rewrite'       => array('slug' => 'projects')
        ));
}


add_action('init', 'register_taxonomy_projects');