<section class="section-lets-connect">
    <div class="container">
        <div class="row">
            <div class="col effect fadeInUp">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <div class="content"><?php the_sub_field('description'); ?></div>
            </div>
            <div class="col effect fadeInUp">
                <?php $form_id = get_sub_field('form_id');
                echo do_shortcode("[contact-form-7 id=".$form_id."]"); ?>
            </div>
        </div>
    </div>
</section>