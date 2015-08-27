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

<div id="secondary" class="widget-area widgets" role="complementary">
	<h1 class="widgets__title">&nbsp;</h1>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
