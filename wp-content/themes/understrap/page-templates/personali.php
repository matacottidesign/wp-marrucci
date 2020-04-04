<?php
/**
 * Template Name: Progetti personali
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>




<div class="py-8">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur harum nihil obcaecati quod voluptate optio non placeat provident quasi totam vero omnis corrupti veritatis distinctio, laborum accusantium illum ratione deleniti!
</div>



<?php get_footer();
