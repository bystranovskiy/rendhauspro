<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon"/>


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
    admin="<?php if (current_user_can('level_10')): echo 'true'; else: echo 'false'; endif; ?>">
<div class="preloader"></div>

<div class="header">
  <div class="row">
    <div class="col">
      <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/rendhaus-logo.svg"
                                    alt=""></a>
    </div>
    <div class="col">
        <?php
        wp_nav_menu(array(
            'theme_location' => '',
            'menu' => 'mainmenu',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_id' => '',
            'echo' => true,
            'depth' => 0,
            'walker' => '',
        ));
        ?>
      <div class="menu-toggle">
        <span></span>
      </div>
    </div>
  </div>
</div>