<section class="section-team">
    <h2 class="section-title effect fadeInUp"><?php the_sub_field('title'); ?></h2>
    <?php if (get_sub_field('team')): ?>
        <div class="team-list">

            <?php while (has_sub_field('team')):
                //vars
                $photo = get_sub_field('photo');
                $name = get_sub_field('name');
                $position = get_sub_field('position');
                $facebook = get_sub_field('facebook');
                $linkedin = get_sub_field('linkedin');
                $mail = get_sub_field('mail');
                ?>

                <div class="team-item effect fadeInUp"
                     style="background-image: url(<?php echo wp_get_attachment_image_url($photo, 'large'); ?>)">

                    <div class="team-item-wrapper">
                        <h3 class="team-item-name"><?php echo $name; ?></h3>
                        <?php if ($facebook || $linkedin || $mail): ?>
                            <ul class="team-item-contacts">
                                <?php if ($facebook): echo '<li><a href="' . $facebook . '" target="_blank"><i class="icon-facebook"></i></a></li>'; endif; ?>
                                <?php if ($linkedin): echo '<li><a href="' . $linkedin . '" target="_blank"><i class="icon-linkedin"></i></a></li>'; endif; ?>
                                <?php if ($mail): echo '<li><a href="mailto:' . $mail . '" target="_blank"><i class="icon-mail"></i></a></li>'; endif; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="team-item-position"><?php echo $position; ?></div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>