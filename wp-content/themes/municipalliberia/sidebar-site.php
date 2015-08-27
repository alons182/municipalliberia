<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package municipalliberia
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="widgets widgets__site">
	<h1 class="widgets__title">Eventos</h1>
	<?php dynamic_sidebar( 'sidebar-site' ); ?>
</aside>