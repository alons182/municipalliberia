<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package municipalliberia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<article class="news__item featured">
        <a href="<?php the_permalink(); ?>" class="news__item__link">
            <figure class="news__item__figure">
                <?php the_post_thumbnail( 'full' ,["class" => "news__item__img"]); ?> 
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

</article><!-- #post-## -->
