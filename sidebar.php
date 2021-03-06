<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Readability
 */

if ( ! is_active_sidebar( 'sidebar-1', 'sidebar-2' ) ) {
	return;
} 
?>
<div class="site-widgets">
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->

	<aside id="tertiary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside><!-- #tertiary -->
</div>
