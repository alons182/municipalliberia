<?php 
    /*
    Template Name: Page Home
     */


get_header(); ?>

	<section class="banner">
               <div id="banner-home" class="owl-carousel">

                     <?php
                        $args = array(
                          'post_type' => 'banners',
                                          
                        );
                        $ads = new WP_Query( $args );
                        if( $ads->have_posts() ) {
                          while( $ads->have_posts() ) {
                            $ads->the_post();
                            
                            $id = get_post_thumbnail_id($post->ID);
                            $thumb_url = wp_get_attachment_image_src($id,'full', true);
                            ?>
                           
                        
                               <div class="banner__slide" style="background-image: url('<?php echo $thumb_url[0] ?>');">
                                 <div class="banner__slide__info">
                                    <h1 class="banner__slide__title ">
                                        <span>
                                            <?php echo rwmb_meta( 'rw_banner_titulo_1'); ?>

                                        </span><br />
                                        <span>
                                           <?php echo rwmb_meta( 'rw_banner_titulo_2'); ?>
                                        </span>
                                    </h1>
                                    <div class="banner__slide__intro">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <a href="#" class="banner__slide__link"></a>
                            </div>

                              
                            <?php
                          }
                        }
                        
                      ?>

               
            </section>
            <section class="content">
                <div class="inner overflow">
			           <section class="news">
                        <h1 class="news__title">Noticias</h1>
                        <?php rewind_posts(); ?>
                        <?php query_posts( 'post_type=post&posts_per_page=3' ); ?>
                        <?php if ( have_posts() ) : ?>
                        <?php $c=0;?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        
                        <?php $c++;?>
                       
                         
                         <article class="news__item <?php echo ( $c == 1) ? 'featured':'' ?>">
                            <a href="<?php the_permalink(); ?>" class="news__item__link">
                                <figure class="news__item__figure">
                                    <?php the_post_thumbnail( ( $c == 1) ? 'full':'news-thumb' ,["class" => "news__item__img"]); ?> 
                                    <div class="news__item__date">
                                       <?php echo get_the_date('Y.m.d'); ?>
                                    </div>
                                </figure>
                                <div class="news__item__intro">
                                    <h1 class="news__item__title"><?php the_title(); ?></h1>
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                            
                        </article>
                       
                        


                        
                        <?php endwhile; ?>
                         <?php endif; ?>
                             <section class="ads">
                                <div class="cycle-slideshow"  data-cycle-timeout="4000"  data-cycle-slides=".ads-slide">
                
                                    <?php
                                        $args = array(
                                          'post_type' => 'ads',
                                                          
                                        );
                                        $ads = new WP_Query( $args );
                                        if( $ads->have_posts() ) {
                                          while( $ads->have_posts() ) {
                                            $ads->the_post();
                                            
                            
                                            $url = rwmb_meta( 'rw_ad_url');
                                            ?>
                                               
                                                 <div class="ads-slide">
                                                    <a href="<?php echo $url; ?>" target="_blank" title="<?php the_title(); ?>">
                                                    <?php                               
                                                        
                                                     

                                                                 the_post_thumbnail( 'full',["class" => "ads-img"]); 
                                                                    
                                                                ?>
                                                    
                                                       
                                                    </a>
                                                </div>


                                              
                                            <?php
                                          }
                                        }
                                        
                                      ?>

                                   
                               </div>
                            </section>
                        </section>
                        
			           

					<?php get_sidebar('site'); ?>
				</div>
			</section>


<?php get_footer(); ?>