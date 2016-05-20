<?php
 /*
    Template Name: Page Jugador Voto
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
		            'post_type' => 'equipo'
		           
		            
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
										    
											
						                    	<img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
						                   

										<?php
											break;
										 }
			                	 	?>
	
			                </div>
			                <div class="players__item__info">
			                	<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=363306470411928";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
			                	<strong class="players__item__vote">
			                		<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
			                	</strong>
			                	<p class="players__item__content">
			                		<a href="#"><?php the_title(); ?></a>
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
		<?php get_sidebar(); ?>
		</div><!-- #primary -->
	</section>


<?php get_footer(); ?>
