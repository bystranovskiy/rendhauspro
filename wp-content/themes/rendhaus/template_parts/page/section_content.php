<?php
// vars
$title = get_sub_field('title');
$description = get_sub_field('description');
$readmore = get_sub_field('readmore');
$image = wp_get_attachment_image_src(get_sub_field('image'), 'full_hd')[0];
$reverse = get_sub_field('reverse');
;?>

<section class="section-content<?php if ($reverse): echo " reverse"; endif; ?>">
  <div class="container">
    <div class="row">
      <div class="col effect fadeInUp">
          <?php if ($title): ?>
            <div class="title">
              <h2 class="section-title"><?php echo $title; ?></h2>
            </div>
          <?php endif; ?>
          <?php if ($description): ?>
            <div class="description"><?php echo $description; ?></div>
          <?php endif; ?>
          <?php if ($readmore): ?>
              <div class="readmore"><p><a class="button<?php if ($reverse): echo " reverse"; endif; ?>" href="<?php echo $readmore["url"]; ?>" target="<?php echo $readmore["target"]; ?>"><?php echo $readmore["title"]; ?></a></p></div>
          <?php endif; ?>
      </div>
      <div class="col">
          <?php if ($image): ?>
            <div class="animated-image effect <?php if ($reverse): echo " fadeInRight"; else: echo " fadeInLeft"; endif; ?>">
              <img src="<?php echo $image; ?>" alt="">
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>