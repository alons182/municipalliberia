<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package municipalliberia
 */

get_header(); ?>

	<section class="content">
        <div class="inner overflow">
        	<section class="news">
				<h1 class="news__title">Equipo</h1>
        	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<?php
					post_type_archive_title('<h1 class="entry-title news__title">','</h1>');
					//the_archive_title( '<h1 class="entry-title news__title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
				
			<div class="entry-content players">
				
					
				<?php
		          $args = array(
		            'post_type' => 'equipo',
		           
		            
		          );
		          $players = new WP_Query( $args );
		          if( $players->have_posts() ) {
		            while( $players->have_posts() ) {
		              $players->the_post();
		              ?>
		                <article class="players__item">
			                <div class="players__item__img">
			                	 <?php 
			                	 	$images = rwmb_meta( 'rw_player_thumb', 'type=image&size=full' ); 
			                	 	foreach ( $images as $image )
										{?>
										    
											<a href="#<?php /*the_permalink();*/ ?>">
						                    	<img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
						                    </a>

										<?php
											break;
										 }
			                	 	?>
	
			                </div>
			                <div class="players__item__info">
			                	<strong class="players__item__number"><?php echo rwmb_meta( 'rw_player_number'); ?></strong>
			                	<p class="players__item__content">
			                		<a href="#<?php /*the_permalink();*/ ?>"><?php the_title(); ?></a>
			                		<span class="players__item__position"><?php echo rwmb_meta( 'rw_player_position'); ?></span>
			                	</p>

			                </div>
		                    
		                </article>        

		     
		                
		              <?php
		            }
		          }
		        ?>
				
				
				

			</div><!-- .entry-content -->

			

			
			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</article>
		</section><!-- #main -->
		<?php get_sidebar('site'); ?>
		</div><!-- #primary -->
	</section>


<?php get_footer(); ?>
