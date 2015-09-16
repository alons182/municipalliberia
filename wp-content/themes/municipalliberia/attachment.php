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
				<h1 class="news__title">Galeria</h1>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'attachment' ); ?>

					<div class="posts-related">
						<?php wp_related_posts()?>
					</div>
					<?php /*the_post_navigation();*/ ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</section>
		<?php get_sidebar('site'); ?>
		
		</div><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
