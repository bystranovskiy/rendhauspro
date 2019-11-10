<section class="section-hero">

    <?php if (have_rows('slides')): ?>

      <div class="hero-slider">

          <?php while (have_rows('slides')): the_row();
              // vars
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              $bg_image = wp_get_attachment_image_src(get_sub_field('bg_image'), 'full_hd')[0];
              ?>
            <div class="slide">
              <div class="slide-bg"
                   style="background-image: url(<?php echo $bg_image; ?>)"></div>
              <div class="content">
                <div class="slide-title animate-header"><?php echo $title; ?></div>
                <div class="side-description"><?php echo $description; ?></div>
              </div>
            </div>
          <?php endwhile; ?>

      </div>

    <?php endif; ?>

    <?php
    $pinterest = get_field('pinterest', 'option');
    $youtube = get_field('youtube', 'option');
    $instagram = get_field('instagram', 'option');
    $linkedin = get_field('linkedin', 'option');
    $facebook = get_field('facebook', 'option');
    $mail = get_field('mail-alt', 'option');
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
        <li><a href="<?php echo $mail; ?>" target="_blank"><i class="icon-mail-alt"></i></a></li>
      <?php endif; ?>
  </ul>

</section>
