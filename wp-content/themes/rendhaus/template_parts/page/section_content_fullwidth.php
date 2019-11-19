<?php
// vars
$title = get_sub_field('title');
$description = get_sub_field('description');
$images = get_sub_field('gallery');
;?>
<section class="section-content-fullwidth">
    <div class="container">
        <?php if ($title): ?>
            <div class="title effect fadeInUp">
                <h2 class="section-title"><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>
        <?php if ($description): ?>
            <div class="description effect fadeInUp"><?php echo $description; ?></div>
        <?php endif; ?>

        <?php
        if( $images ): ?>
            <div class="gallery effect fadeInUp">
                <?php foreach( $images as $image_id ): ?>
                    <div class="gallery-item">
                        <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>