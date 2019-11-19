<?php /* Template Name: Portfolio */ ?>

<?php get_header(); ?>

    <div class="main-page-wrap">
        <?php
        // vars
        $page_title = get_field('page_title');
        $category = get_field('category');
        $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full_hd');
        $terms = get_terms(array(
            'taxonomy' => array($category), // название таксономии с WP 4.5
            'orderby' => 'id',
            'order' => 'ASC',
            'hide_empty' => true,
            'object_ids' => null,
            'include' => array(),
            'exclude' => array(),
            'exclude_tree' => array(),
            'number' => '',
            'fields' => 'all',
            'count' => false,
            'slug' => '',
            'parent' => '',
            'hierarchical' => true,
            'child_of' => 0,
            'get' => '', // ставим all чтобы получить все термины
            'name__like' => '',
            'pad_counts' => false,
            'offset' => '',
            'search' => '',
            'cache_domain' => 'core',
            'name' => '',    // str/arr поле name для получения термина по нему. C 4.2.
            'childless' => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
            'update_term_meta_cache' => true, // подгружать метаданные в кэш
            'meta_query' => '',
        ));
        ?>

        <section class="section-page-header">
            <div class="section-bg" style="background-image:url(<?php echo $post_thumbnail[0]; ?>)"></div>
            <div class="wrapper">
                <h1 class="page-title"><?php echo $page_title; ?></h1>
            </div>
            <div class="slide-down"><span></span></div>
        </section>

        <section class="section-portfolio">

                <ul class="isotope-filter effect fadeInUp">
                    <li class="filter-item"><a href="#all" class="active">Все</a></li>
                    <?php foreach ($terms as $term): ?>
                        <li class="filter-item"><a href="#<?php echo $term->slug ?>"><?php echo $term->name ?></a></li>
                    <?php endforeach; ?>
                </ul>

                <?php
                $args = array(
                    'post_type' => $category,
                    'order' => 'ASC',
                    'orderby' => 'menu_order',
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : ?>
                    <div class="portfolio-list isotope-list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                            // vars
                            $ID = get_the_ID();
                            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'medium');
                            $terms = wp_get_post_terms($ID, $category, array('fields' => 'all'));
                            $term = $terms[0]->slug; ?>
                            <div class="list-item <?php echo $term; ?>">
                                <div class="item-bg"
                                     style="background-image:url(<?php echo $post_thumbnail[0]; ?>)"></div>
                                <a href="<?php echo get_post_permalink($ID);?>" class="inner-wrapper">
                                    <h2 class="post-title animate-header"><?php the_title(); ?></h2>
                                    <span class="button align-center">Подробнее</span>
                                </a>

                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>


        </section>

        <section class="section-lets-connect">
            <div class="container">
                <div class="row">
                    <div class="col effect fadeInUp">
                        <h2 class="section-title"><?php the_field('title'); ?></h2>
                        <div class="content"><?php the_field('description'); ?></div>
                    </div>
                    <div class="col effect fadeInUp">
                        <?php $form_id = get_field('form_id');
                        echo do_shortcode("[contact-form-7 id=".$form_id."]"); ?>
                    </div>
                </div>
            </div>
        </section>

    </div>

<?php get_footer(); ?>