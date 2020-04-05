<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area py-8 px-3 sticky-top" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area py-8 px-3" id="right-sidebar" role="complementary">
		<div class="sticky-top pt-5">
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
</div><!-- #right-sidebar -->
