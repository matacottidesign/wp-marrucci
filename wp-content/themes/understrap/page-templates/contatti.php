<?php
/**
 * Template Name: Contatti
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
    <div class="container">
    <?php the_field('codice_contact_form'); ?>
    </div>
</div> 




<?php get_footer();
