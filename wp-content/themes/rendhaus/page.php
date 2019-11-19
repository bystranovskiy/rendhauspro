<?php get_header(); ?>


    <div class="main-page-wrap">

        <?php if (have_rows('page')):
            while (have_rows('page')) : the_row();

                get_template_part( 'template_parts/page/section_' . get_row_layout());

            endwhile;
        endif; ?>

    </div>


<?php get_footer(); ?>