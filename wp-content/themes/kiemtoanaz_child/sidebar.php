<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kiemtoanaz
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if (is_archive()) { ?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-archive' ); ?>
</aside><!-- #secondary -->
<?php } ?>


<?php if (is_front_page()) { ?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
</aside><!-- #secondary -->
<?php } ?>


<?php if (is_single()) { ?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<?php } ?>
