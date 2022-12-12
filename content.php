<?php
/**
 * The template for displaying content where a specific template is not available.
 *
 * @package V. Palenik
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

	<?php else : ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'poetista' ), 'after'  => '</div>', ) ); ?>
		</div><!-- .entry-content -->

	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->