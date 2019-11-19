<?php get_header(); ?>
    <div class="main-page-wrap">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            // vars
            $post_id = get_the_ID();
            $post_type = get_post_type( $post_id );
            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full_hd');
            $location = get_field('location');
            $square_meters = get_field('square_meters');
            $date = get_field('date');
            $team = get_field('team');
            $images = get_field('images');

            $term_list = wp_get_post_terms($post_id, $post_type, array('fields' => 'all'));
            $term = $term_list[0]->slug;
            ?>

            <section class="section-page-header">
                <div class="section-bg" style="background-image:url(<?php echo $post_thumbnail[0]; ?>)"></div>
                <div class="wrapper">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div>
                <div class="slide-down"><span></span></div>
            </section>

            <section class="section-about-project">
                <div class="container">
                    <div class="row">
                        <div class="col effect fadeInUp">
                            <div class="project-description"><?php the_content(); ?></div>
                        </div>
                        <div class="col effect fadeInUp">
                            <div class="project-details">
                                <?php if ($location): ?>
                                    <div class="card icon-location">
                                        <div class="card-details">
                                            <h4 class="card-title">Location:</h4>
                                            <div class="card-text"><?php echo $location; ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($square_meters): ?>
                                    <div class="card icon-square">
                                        <div class="card-details">
                                            <h4 class="card-title">Square meters:</h4>
                                            <div class="card-text"><?php echo $square_meters; ?>m<sup>2</sup></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($date): ?>
                                    <div class="card icon-calendar">
                                        <div class="card-details">
                                            <h4 class="card-title">Date:</h4>
                                            <div class="card-text"><?php echo $date; ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($team): ?>
                                    <div class="card icon-group">
                                        <div class="card-details">
                                            <h4 class="card-title">Team:</h4>
                                            <div class="card-text"><?php echo $team; ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-project-gallery">
                <?php
                if ($images): ?>
                    <div class="project-gallery">
                        <?php foreach ($images as $image):
                            $width = $image["sizes"]["full_hd-width"];
                            $height = $image["sizes"]["full_hd-height"];
                            ?>
                            <div class="gallery-item <?php if ($height > $width): echo 'vertical';
                            else : echo 'horizontal'; endif; ?> effect fadeInUp">
                                <div class="gallery-item_bg"
                                     style="background-image: url(<?php echo esc_url($image['sizes']['full_hd']); ?>)"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>

            <a href="<?php echo '/'.$post_type.'-portfolio/#'.$term;?>" class="scroll-button return-to-portfolio" style="display: none;"><span>Return To Portfolio</span></a>

        <?php endwhile; ?>

    </div>
<?php get_footer(); ?>