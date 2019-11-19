<section class="section-categories">
    <div class="section-categories_wrapper">

        <?php
        //vars
        $category = get_sub_field('category');

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
        )); ?>


        <?php foreach ($terms as $term): ?>

            <?php
            $posts = get_posts(array(
                'posts_per_page' => 1,
                'post_type' => $category,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => $category,
                        'field' => 'slug',
                        'terms' => $term->slug
                    )
                )
            ));

            foreach ($posts as $post) :
                //vars
                $id = $post->ID;
                $thumbnail = get_the_post_thumbnail_url($id, 'large');
                ?>

                <div class="category-item effect fadeInUp">
                    <div class="bg-image" style="background-image: url(<?php echo $thumbnail; ?>)"></div>
                    <a class="inner-wrapper" href="/<?php echo $category ?>-portfolio/#<?php echo $term->slug ?>">
                        <h3 class="category-name animate-header"><?php echo $term->name; ?></h3>
                        <?php if ($term->description): ?><span
                            class="category-description  animate-header"><?php echo $term->description; ?></span><?php endif; ?>
                        <div class="button align-center">Подробнее</div>
                    </a>
                </div>

            <?php endforeach;
            wp_reset_postdata(); // сброс ?>


        <?php endforeach; ?>
    </div>
</section>