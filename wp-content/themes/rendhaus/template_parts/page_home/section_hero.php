<section class="section-hero">


    <?php
    $slidesCount = get_sub_field('slides_count');
    $args = array(
        'post_type' => 'projects',
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'posts_per_page' => $slidesCount
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>

        <div class="hero-slider">

            <?php while ($the_query->have_posts()) : $the_query->the_post();
                // vars
                $ID = get_the_ID();
                $title = get_the_title();
                $description = get_the_excerpt();
                $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'full-hd');
                ?>
                <div class="slide">
                    <div class="slide-bg"
                         style="background-image: url(<?php echo $post_thumbnail[0]; ?>)"></div>
                    <div class="content">
                        <div class="slide-title animate-header"><?php echo $title; ?></div>
                        <div class="slide-description"><?php echo $description; ?></div>
                        <div class="slide-readmore">
                            <a href="<?php echo get_post_permalink($ID);?>" class="button white">Readmore</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    <?php endif; wp_reset_postdata(); ?>


    <?php
    $pinterest = get_field('pinterest', 'option');
    $youtube = get_field('youtube', 'option');
    $instagram = get_field('instagram', 'option');
    $linkedin = get_field('linkedin', 'option');
    $facebook = get_field('facebook', 'option');
    $mail = get_field('mail', 'option');
    ?>

    <ul class="social-icons">
        <?php if ($pinterest) : ?>
            <li><a href="<?php echo $pinterest; ?>" target="_blank"><i class="icon-pinterest"></i></a></li>
        <?php endif; ?>
        <?php if ($youtube) : ?>
            <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="icon-youtube"></i></a></li>
        <?php endif; ?>
        <?php if ($instagram) : ?>
            <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="icon-instagram"></i></a></li>
        <?php endif; ?>
        <?php if ($linkedin) : ?>
            <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
        <?php endif; ?>
        <?php if ($facebook) : ?>
            <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="icon-facebook"></i></a></li>
        <?php endif; ?>
        <?php if ($mail) : ?>
            <li><a href="<?php echo $mail; ?>" target="_blank"><i class="icon-mail"></i></a></li>
        <?php endif; ?>
    </ul>

    <div class="slide-down"><span></span></div>

</section>
