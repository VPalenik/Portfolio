<!--Static content page-->
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package V. Palenik
 */

 get_header();?>        
<!-- Dynamic main content WP loop-->
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; ?>
            <!--the_content();
            multiple addional php functions like: thumbnails, pictures, author, date, time, etc.-->

<!-- Footer-->
<?php
    get_footer();
?>          
