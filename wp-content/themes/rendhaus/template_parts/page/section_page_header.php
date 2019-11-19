<?php
// vars
$post_id = get_the_ID();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full_hd');
?>

<section class="section-page-header">
    <div class="section-bg" style="background-image:url(<?php echo $post_thumbnail[0]; ?>)"></div>
    <div class="wrapper">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
    <div class="slide-down"><span></span></div>
</section>