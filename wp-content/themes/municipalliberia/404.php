<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package municipalliberia
 */

get_header(); ?>

		<section class="content">
        	<div class="inner overflow">
				

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! La pagina no fue encontrada.', 'municipalliberia' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. Tal vez intente una búsqueda?', 'municipalliberia' ); ?></p>

					<?php get_search_form(); ?>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>
