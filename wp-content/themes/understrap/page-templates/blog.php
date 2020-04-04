<?php
/**
 * Template Name: Blog
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




<div class="hero-blog bg-warning"></div>

<!--Cards-->
<div class="py-8">
    <div class="container">
        <div class="row">
            <?php if( have_rows('ripetitore') ): ?>
                    <?php while( have_rows('ripetitore') ): the_row(); 

                        // vars
                        $image = get_sub_field('immagine_ripetitore');

                        ?>
                        <div class="col-12 col-md-4">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                        <div class="card-body">
                                            <h6><?php the_sub_field('titolo_ripetitore'); ?></h6>
                                            <?php the_sub_field('descrizione_ripetitore'); ?>
                                        </div>
                                    </div>
                                    <div class="flip-box-back">
                                        <h2>Back Side</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div> 



<?php get_footer();
