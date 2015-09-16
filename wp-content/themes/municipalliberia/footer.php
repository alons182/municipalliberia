<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package municipalliberia
 */

?>

	</main><!-- #content -->

	<footer class="footer">
           
            <section class="store">
                <div class="inner">
                    <div class="store__slider">
                        
                        <h1 class="store__title">Tienda</h1>
                        <div class="ca-wrapper">

                           
                                <div class="store__slider__item ca-item">
                                    <a href="#" class="store__slider__item__link">
                                        <figure class="store__slider__item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop-item.jpg" alt="item">
                                        </figure>
                                        <span class="store__slider__item__caption">
                                            
                                                Camisa Casa

                                           
                                        </span>
                                    </a>
                                    
                                </div>
                                <div class="store__slider__item ca-item">
                                    <a href="#" class="store__slider__item__link">
                                        <figure class="store__slider__item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop-item-2.jpg" alt="item">
                                        </figure>
                                        <span class="store__slider__item__caption">
                                            
                                                Pantaloneta Casa

                                           
                                        </span>
                                    </a>
                                    
                                </div>
                                <div class="store__slider__item ca-item">
                                    <a href="#" class="store__slider__item__link">
                                        <figure class="store__slider__item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop-item-3.jpg" alt="item">
                                        </figure>
                                        <span class="store__slider__item__caption">
                                            
                                                Camisa Visita

                                           
                                        </span>
                                    </a>
                                    
                                </div>
                                <div class="store__slider__item ca-item">
                                    <a href="#" class="store__slider__item__link">
                                        <figure class="store__slider__item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop-item-4.jpg" alt="item">
                                        </figure>
                                        <span class="store__slider__item__caption">
                                            
                                                Pantaloneta Visita

                                           
                                        </span>
                                    </a>
                                    
                                </div>
                                <div class="store__slider__item ca-item">
                                    <a href="#" class="store__slider__item__link">
                                        <figure class="store__slider__item__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/shop-item-5.jpg" alt="item">
                                        </figure>
                                        <span class="store__slider__item__caption">
                                            
                                                Camisa Portero Casa

                                           
                                        </span>
                                    </a>
                                    
                                </div>
                                
                                
                           

                        </div>
                    </div>
                </div>
            </section>
            <section class="media">
                <div class="media__slider">
                        
                        <?php rewind_posts(); ?>
                      <?php query_posts( 'post_type=page&page_id=44' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>
                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                  <!--<ul class="ca-wrapper slides">    
                     <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/media.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/media.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                        <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                        <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/media.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/marcador.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                        <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/media.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/media.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                         <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                         <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link">
                                <figure class="media__item__figure" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Satellite.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                        <li class="media__item ca-item">
                            <a href="#image-popup" class="media__item__link" data-effect="mfp-zoom-out" data-img="<?php echo get_template_directory_uri(); ?>/img/media.jpg">
                                <figure class="media__item__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/media.jpg" />
                                </figure>
                                
                            </a>
                        </li>
                    </ul>-->
                </div>
            </section>
            <section class="member">
                <div class="inner"> 
                    <h2 class="member__title">Se parte de nosotros</h2>
                    <p class="member__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quisquam quam suscipit omnis unde, quasi accusantium natus nam ipsa earum a accusamus dicta sit incidunt aliquid perspiciatis! Libero, cupiditate, obcaecati!</p>
                    <a class="member__button btn btn-red" href="#">Hazte Miembro</a>
                </div>
            </section>
            
                <section class="partners">
                    <div class="inner">
                        <h2 class="partners__title">Patrocinadores</h2>
                        <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                        <a href="#" class="partners__link" title="Palo Verde" ><i class="icon-avotz"></i></a>
                         <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                         <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                         <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                         <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                         <a href="#" class="partners__link" title="Calitur" ><i class="icon-avotz"></i></a>
                     </div>
                </section>
                
                <section class="copy">
                    <div class="inner">
                        <section class="copy__social">

                             <a href="#" class="copy__social__link"><i class="icon-facebook"></i></a>
                             <a href="#" class="copy__social__link"><i class="icon-twitter"></i></a>
                             <a href="#" class="copy__social__link"><i class="icon-google-plus"></i></a>
                             <a href="#" class="copy__social__link"><i class="icon-youtube"></i></a>
                             
                        </section>
                   
                        <div class="copy__copyright">
                            Municipal Liberia &copy; Copyright - <a href="http://avotz.com"><i class="icon-avotz"></i></a>
                        </div>
                    </div>
                </section>
                
            
        </footer>
        <div id="image-popup" class="image-popup yellow-popup mfp-hide mfp-with-anim">
           <div id="contenido-popup"></div> 
           <div class="media__share">
                        <h2 class="media__share__title">Compartir</h2>
                        <a class="media__share__facebook icon-facebook" title="Facebook" href="#" target="_blank"></a>
                        <a class="media__share__twitter icon-twitter" href="#" target="_blank"></a>
                        <a class="media__share__googleplus icon-google-plus" href="#" target="_blank"></a>
                    </div>
        </div>
<?php wp_footer(); ?>

</body>
</html>
