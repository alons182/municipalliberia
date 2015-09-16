<?php
/**
 * Template part for displaying attachment .
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package municipalliberia
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title ">', '</h1>' ); ?>


	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<div class="sidebar">
			<?php echo do_shortcode('[ssba]'); ?>
			
				<div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
                        <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
                        </p>
<?php else : ?>
                        <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
                        </div>
			
		</div>
		

	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php municipalliberia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->




                        


