<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package municipalliberia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() ) :
			
	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	
			<div class="entry-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
						
		<?php endif; ?>
	<div class="entry-content">
		<div class="sidebar">
			<?php echo do_shortcode('[ssba]'); ?>
			
			<div>
				
				<div class="player-right">
						<div class="player-positions">
						<h4>Posiciones</h4>

						<?php 
							$pos = rwmb_meta( 'rw_player_position');
							$pos2 = rwmb_meta( 'rw_player_position_2');
							
							function create_slug($string){
							   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
							   return $slug;
							}
							
						   ?>
						   <img src="<?php echo get_template_directory_uri();?>/img/pos_main.png" alt="<?php echo $pos; ?>" class="<?php echo create_slug($pos); ?>" title="<?php echo $pos; ?>" />
						   <?php if($pos == 'Defensa Central') : ?>
						   		<img src="<?php echo get_template_directory_uri();?>/img/pos_main.png" alt="<?php echo $pos; ?>" class="<?php echo create_slug($pos.'2'); ?>" title="<?php echo $pos; ?>" />
						   	<?php endif ?>
						   	
							<?php if($pos2) : ?>
								<img src="<?php echo get_template_directory_uri();?>/img/pos_secondary.png" alt="<?php echo $pos2; ?>" class="<?php echo create_slug($pos2); ?> secondary" title="<?php echo $pos2; ?>" />
								<?php if($pos2 == 'Defensa Central') : ?>
						   			<img src="<?php echo get_template_directory_uri();?>/img/pos_secondary.png" alt="<?php echo $pos2; ?>" class="<?php echo create_slug($pos2.'2'); ?> secondary" title="<?php echo $pos2; ?>" />
						   		<?php endif ?>
						   		

						   			
							<?php endif ?>
							<div class="player-positions-titles">
								<div class="player-positions-titles-item">Posaaaaa. 1: <?php echo $pos; ?></div>
							<?php if($pos2) : ?>
								<div class="player-positions-titles-item">Pos. 2: <?php echo $pos2; ?></div>
							<?php endif ?>
							</div>
							
							

					</div>
					<div class="player-img">
								<?php $images = rwmb_meta( 'rw_player_thumb', 'type=image&size=large' ); 
						         if ( $images ) {?>
						         
						         
						            
						                 <?php foreach ( $images as $image ){?>
						                     
						                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
						                  
						                  <?php } ?>

						                 
						            

						         <?php         
						              }
						          ?>
							</div>
				</div>
				
				<?php the_content(); ?>
			</div>
			
		</div>
		

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'municipalliberia' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

