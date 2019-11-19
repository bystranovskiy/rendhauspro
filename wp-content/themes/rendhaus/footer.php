<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<a href="#top" class="scroll-button scroll-to-top" style="display: none;"><span>Scroll To Top</span></a>
<footer>
    <div class="row">
        <div class="col">
            <div class="copyright">COPYRIGHT <?php echo date('Y'); ?>. ALL RIGHTS RESERVED</div>
        </div>
        <div class="col">
            <?php
            wp_nav_menu(array(
                'theme_location' => '',
                'menu' => 'footermenu',
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_id' => '',
                'echo' => true,
                'depth' => 0,
                'walker' => '',
            ));
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
