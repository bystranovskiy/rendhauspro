<?php


function my_browser_body_class($classes)
{
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $is_edge;
    if ($is_lynx) $classes[] = 'lynx';
    elseif ($is_edge) $classes[] = 'edge';
    elseif ($is_gecko) $classes[] = 'gecko';
    elseif ($is_opera) $classes[] = 'opera';
    elseif ($is_NS4) $classes[] = 'ns4';
    elseif ($is_safari) $classes[] = 'safari';
    elseif ($is_chrome) $classes[] = 'chrome';
    elseif ($is_IE) {
        $classes[] = 'ie';
        if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
            $classes[] = 'ie' . $browser_version[1];
    } else $classes[] = 'unknown';
    if ($is_iphone) $classes[] = 'iphone';
    if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
        $classes[] = 'osx';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
        $classes[] = 'linux';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
        $classes[] = 'windows';
    }
    return $classes;
}

add_filter('body_class', 'my_browser_body_class');


function remove_weird_characters($content) {
    $content = preg_replace('/\x03/', '', $content);
    return $content;
}

add_filter('the_content', 'remove_weird_characters');
add_filter('the_title', 'remove_weird_characters');


function acf_remove_weird_characters( $value, $post_id=0, $field=array() ) {
    if (isset($field['type']) && ($field['type'] == 'repeater' || $field['type'] == 'flexible_content')) {
        // abort if it's a repeater
        return $value;
    }
    if (!is_array($value)) {
        $value = preg_replace('/\x03/', '', $value);
        return $value;
    }
    $return = array();
    foreach ($value as $index => $data) {
        $return[$index] = acf_remove_weird_characters ($data);
    }
    return $return;
}

add_filter('acf/update_value', 'acf_remove_weird_characters', 10, 3);

function get_total_from_repeater_field($repeater, $repeater_field, $post_id)
{
    $arr_helper = array();

    while (have_rows($repeater, $post_id)) : the_row();

        if (get_sub_field($repeater_field)) {
            $arr_helper[] = get_sub_field($repeater_field);
        }

    endwhile;

    return array_sum($arr_helper);

}

function get_lowest_value_from_repeater_field($repeater, $repeater_field, $post_id)
{
    $arr_helper = array();

    while (have_rows($repeater, $post_id)) : the_row();
        if (get_sub_field($repeater_field)) {
            $arr_helper[] = get_sub_field($repeater_field);
        }

    endwhile;

    return min($arr_helper);

}

function get_highest_value_from_repeater_field($repeater, $repeater_field, $post_id)
{
    $arr_helper = array();

    while (have_rows($repeater, $post_id)) : the_row();
        if (get_sub_field($repeater_field)) {
            $arr_helper[] = get_sub_field($repeater_field);
        }

    endwhile;

    return max($arr_helper);

}


/**
 * Allow HTML in term (category, tag) descriptions
 */
foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
}

foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}



/** add this to your function.php child theme to remove ugly shortcode on excerpt */

if(!function_exists('remove_vc_from_excerpt'))  {
    function remove_vc_from_excerpt( $excerpt ) {
        $patterns = "/\[[\/]?vc_[^\]]*\]/";
        $replacements = "";
        return preg_replace($patterns, $replacements, $excerpt);
    }
}

/** * Original elision function mod by Paolo Rudelli */

if(!function_exists('kc_excerpt')) {

    /** Function that cuts post excerpt to the number of word based on previosly set global * variable $word_count, which is defined below */

    function kc_excerpt($excerpt_length = 15) {

        global $word_count, $post;

        $word_count = isset($word_count) && $word_count != "" ? $word_count : $excerpt_length;

        $post_excerpt = $post->post_excerpt != "" ? $post->post_excerpt : strip_tags($post->post_content); $clean_excerpt = strpos($post_excerpt, '...') ? strstr($post_excerpt, '...', true) : $post_excerpt;

        /** add by PR */

        $clean_excerpt = strip_shortcodes(remove_vc_from_excerpt($clean_excerpt));

        /** end PR mod */

        $excerpt_word_array = explode (' ',$clean_excerpt);

        $excerpt_word_array = array_slice ($excerpt_word_array, 0, $word_count);

        $excerpt = implode (' ', $excerpt_word_array).'...'; echo ''.$excerpt.'';

    }

}

add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
    remove_menu_page('edit.php');
}


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo '<style>
    #postimagediv .inside img{
        min-height: 100px;
        min-width: 100px; 
    } 
  </style>';
}


/* Изменение стилей логин страницы */
function login_style()
{
    wp_enqueue_style('login-style', get_bloginfo('template_directory') . '/login-style.css', '', '1.0.1');
}

add_action('login_head', 'login_style');

//* Изменение стилей админки */
function admin_style()
{
    wp_enqueue_style('fontello-css', get_bloginfo('template_directory') . '/src/fonts/fontello/css/fontello.css', '', '1.0.1');
}

add_action('admin_head', 'admin_style');


/* Изменение внутреннего логотипа админки */
function reset_admin_wplogo()
{
    remove_action('admin_bar_menu', 'wp_admin_bar_wp_menu', 10); // удаляем стандартную панель (логотип)

    add_action('admin_bar_menu', 'my_admin_bar_wp_menu', 10); // добавляем свою
}

function my_admin_bar_wp_menu($wp_admin_bar)
{
    $wp_admin_bar->add_menu(array(
        'id' => 'wp-logo',
        //'title' => '<span style="font-family:dashicons; font-size:20px;" class="dashicons dashicons-carrot"></span>', // иконка dashicon
        'title' => '<img style="margin: 0 10px; width: 126px; position: relative; top: 3px;" src="' . get_bloginfo('template_directory') . '/assets/imgs/rendhaus-logo.svg" alt="" >', // иконка favicon
        'href' => home_url(),
        'meta' => array(
            'title' => get_bloginfo('name'),
        ),
    ));
}

add_action('add_admin_bar_menus', 'reset_admin_wplogo');


/* Удаление виджетов из Консоли WordPress */
function clear_dash()
{
    $side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
    $normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];

    unset($side['dashboard_quick_press']);          // Быстрая публикация
    unset($side['dashboard_recent_drafts']);        // Последние черновики
    unset($side['dashboard_primary']);              // Блог WordPress
    unset($side['dashboard_secondary']);            // Другие Новости WordPress

    unset($normal['dashboard_incoming_links']);     // Входящие ссылки
    unset($normal['dashboard_right_now']);          // Прямо сейчас
    unset($normal['dashboard_recent_comments']);    // Последние комментарии
    unset($normal['dashboard_plugins']);            // Последние Плагины
}

add_action('wp_dashboard_setup', 'clear_dash');


/* Сортировка пунктов меню в админке */
function custom_menu_order($menu_ord)
{
    if (!$menu_ord) return true;

    return array(
        'edit.php?post_type=page',      // Страницы
        //'index.php',                  // Консоль
        'edit.php?post_type=team',      // Команда
        'edit.php',                     // Записи
        'edit.php?post_type=services',  // Услуги
        'edit.php?post_type=partners',  // Партнеры
        'upload.php',                   // Медиафайлы
        'link-manager.php',             // Ссылки
        'edit-comments.php',            // Комментарии
        'themes.php',                   // Внешний вид
        'users.php',                    // Пользователи
        'tools.php',                    // Инструменты
        'plugins.php',                  // Плагины
        'options-general.php',          // Параметры
    );
}

add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


$cur_user_id = get_current_user_id();
if ($cur_user_id == '2') {
    /* Удаляю ненужные пункты меню в админке */
    function remove_menus()
    {
        //remove_menu_page( 'edit.php?post_type=page' );                //Страницы
        //remove_menu_page( 'edit.php' );                               //Записи
        remove_menu_page('index.php');                                  //Консоль
        //remove_menu_page('upload.php');                               //Медиафайлы
        remove_menu_page('edit-comments.php');                          //Комментарии
        remove_menu_page('themes.php');                                 //Внешний вид
        remove_menu_page('plugins.php');                                //Плагины
        remove_menu_page('users.php');                                  //Пользователи
        remove_menu_page('tools.php');                                  //Инструменты
        remove_menu_page('options-general.php');                        //Настройки
        remove_menu_page('edit.php?post_type=acf-field-group');         //ACF
    }

    add_action('admin_menu', 'remove_menus');
}