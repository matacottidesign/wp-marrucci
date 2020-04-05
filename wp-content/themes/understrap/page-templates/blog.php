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




<div class="hero-articolo bg-warning"></div>

<!--Cards-->
<div class="py-8">
    <div class="container">
        <div class="row">
            <?php if( have_rows('ripetitore') ): ?>
                    <?php while( have_rows('ripetitore') ): the_row(); 

                        // vars
                        $image = get_sub_field('immagine_ripetitore');
                        $title = get_sub_field('titolo_ripetitore');
                        $description = get_sub_field('descrizione_ripetitore');
                        $link = get_sub_field('link_ripetitore');

                        ?>
                        <div class="col-12 col-md-4 d-flex justify-content-center my-3">
                            <div class="card-box">
                                <?php 
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="content-card-box p-3">
                                    <h5><?php echo $title; ?></h5>
                                    <p><?php echo $description; ?></p>
                                    <button class="btn btn-warning">
                                        <?php 
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </button>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div> 



<?php get_footer();
