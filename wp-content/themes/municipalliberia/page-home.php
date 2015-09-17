<?php 
    /*
    Template Name: Page Home
     */


get_header(); ?>

	<section class="banner">
                <div class="cycle-slideshow" 
                            data-cycle-fx="scrollHorz"
                            data-cycle-timeout="4000"
                            data-cycle-slides=".banner__slide"
                            >
                            <!-- empty element for pager links -->
                            <div class="cycle-pager banner__pager"></div>

                            <div class="banner__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.jpg');">
                                
                                <div class="banner__slide__info">
                                    <h1 class="banner__slide__title">
                                        <span>
                                            UNA GRAN PASIÓN PARA UN GRAN EQUIPO 

                                        </span><br />
                                        <span>
                                            JUNTO A VOS SOMOS EL MUNICIPAL LIBERIA
                                        </span>
                                    </h1>
                                    <div class="banner__slide__intro">
                                        Apoyá siempre al equipo, asistí al estadio y defendé los colores del equipo con la gran pasión pampera; Liberia somos todos,  viví con respeto y pasión el fútbol del Municipal Liberia !!
                                    </div>
                                </div>
                                <a href="#" class="banner__slide__link"></a>
                            </div>
                            <div class="banner__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg');">
                                
                                <div class="banner__slide__info">
                                    <h1 class="banner__slide__title">
                                        <span>
                                            UNA GRAN PASIÓN PARA UN GRAN EQUIPO 

                                        </span><br />
                                        <span>
                                            JUNTO A VOS SOMOS EL MUNICIPAL LIBERIA
                                        </span>
                                    </h1>
                                    <div class="banner__slide__intro">
                                        Apoyá siempre al equipo, asistí al estadio y defendé los colores del equipo con la gran pasión pampera; Liberia somos todos,  viví con respeto y pasión el fútbol del Municipal Liberia !!
                                    </div>
                                </div>
                                <a href="#" class="banner__slide__link"></a>
                            </div>
                        
                            
                        </div>       
               
            </section>
            <section class="content">
                <div class="inner overflow">
			           <section class="news">
                        <h1 class="news__title">Noticias</h1>
                        <?php rewind_posts(); ?>
                        <?php query_posts( 'post_type=post&posts_per_page=5' ); ?>
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
                        </section>
			           

					<?php get_sidebar('site'); ?>
				</div>
			</section>


<?php get_footer(); ?>