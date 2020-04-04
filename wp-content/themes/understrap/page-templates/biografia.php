<?php
/**
 * Template Name: Biografia
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




<div class="hero bg-warning">
    <?php 
    $image = get_field('immagine_principale');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>

<!--Storia-->
<div class="py-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <?php the_field('descrizione_storia'); ?>
            </div>
            <div class="col-12 col-sm-6">
                <?php 
                $image = get_field('immagine_storia');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!--Skills-->
<div class="py-8 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <?php 
                $image = get_field('immagine_skills');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-6 text-right">
                <h2 class="mb-5"><?php the_field('titolo_skills'); ?></h2>
                <?php the_field('descrizione_skills'); ?>
            </div>
        </div>
    </div>
</div>

<!--ICONE + CV-->
<div class="py-8">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                <h2 class="mb-5"><?php the_field('titolo_cv'); ?></h2>
                <?php the_field('descrizione_cv'); ?>
                </div>

                <?php
                $file = get_field('file_download');
                if( $file ): ?>
                    <button class="btn btn-primary">
                        <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
                    </button>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-between">
                <?php if( have_rows('icone_softwares') ): ?>
                    <?php while( have_rows('icone_softwares') ): the_row(); 

                        // vars
                        $image = get_sub_field('immagine_icona');

                        ?>
                        <img width="40px" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />


                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer();
