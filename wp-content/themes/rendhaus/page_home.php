<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>


    <div class="main-page-wrap">

        <?php if (have_rows('page_home')):
            while (have_rows('page_home')) : the_row();

                get_template_part( 'template_parts/page_home/section_' . get_row_layout());

            endwhile;
        endif; ?>

    </div>


<?php get_footer(); ?>