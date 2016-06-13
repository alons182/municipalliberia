<?php
/**
 * Template part for displaying single posts.
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
	<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'large', true);
	  	 	?>
	    	
			<div class="entry-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');">
				<span class="entry-date"><?php the_date('Y.m.d'); ?></span>
			</div>
						
		<?php endif; ?>
	

	<div class="entry-content">
		<div class="sidebar">
			<?php echo do_shortcode('[ssba]'); ?>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
		

	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php municipalliberia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

