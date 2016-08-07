<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hikaku-cfd
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div id="sidebar1" class="sidebar">
<?php dynamic_sidebar('Widgets 1'); ?>
</div>

<div id="sidebar2" class="sidebar">
<?php dynamic_sidebar('Widgets 2'); ?>
</div>




<div class="small-12 medium-3 columns secondary">
 <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>

