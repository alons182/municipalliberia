<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package municipalliberia
 */

get_header(); ?>

	<section class="content">
        <div class="inner overflow">
			<section class="news">
				<h1 class="news__title">Equipo</h1>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'player' ); ?>


				<?php endwhile; // End of the loop. ?>
			</section>
		<?php get_sidebar('site'); ?>
		
		</div><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
