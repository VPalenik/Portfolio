<!-- Header -->
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package V. Palenik
 */

get_header(); ?>

<!--Displaying a single page-->
<!-- Dynamic main content WP loop-->
<?php while ( have_posts() ) : the_post(); ?>
            
<?php get_template_part('template-parts/content', 'events'); ?>
            <!--that allows for adding content other than mainpage - uses /template-parts files
            in this case /template-parts/content-events.php-->

<?php endwhile; ?>


<!-- Footer-->
<?php
    get_footer();
?>          
