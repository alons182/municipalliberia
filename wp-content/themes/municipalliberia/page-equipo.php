<?php
 /*
    Template Name: Page Equipo
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
					the_title( '<h1 class="entry-title">', '</h1>' ); 
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
			                	 <?php if ( has_post_thumbnail() ) :

				                    $id = get_post_thumbnail_id($post->ID);
				                    $thumb_url = wp_get_attachment_image_src($id,'full', true);
				                    ?>
				                    <a href="<?php the_permalink(); ?>">
				                    	<img src="<?php echo $thumb_url[0] ?>" />
				                    </a>
				                  
				                <?php endif; ?>
			                </div>
			                <div class="players__item__info">
			                	<strong class="players__item__number">1</strong>
			                	<p class="players__item__content">
			                		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			                		<span class="players__item__position">Portero</span>
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
		<?php get_sidebar(); ?>
		</div><!-- #primary -->
	</section>


<?php get_footer(); ?>
