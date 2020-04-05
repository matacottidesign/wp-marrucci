<?php
/**
 * Template Name: Esposizioni
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




<div class="hero-esposizioni bg-warning"></div>


<div class="pt-8">
    <div class="container">
    <?php if( have_rows('riga_contenuto') ): ?>
        <?php while( have_rows('riga_contenuto') ): the_row();?>

        <div class="row pb-8">

            <div class="col-12 col-lg-4">
                <h2 class="mb-5"><?php the_sub_field('titolo_commissione'); ?></h2>
                <?php the_sub_field('descrizione_commissione'); ?>
            </div>

            <div class="col-12 col-lg-8">
                <?php if( have_rows('galleria') ) { ?>
                
                <?php
                    $num = 0;
                    $active = 'active';
                    $Id = rand();
                ?>
                
                <div id="<?php echo 'carousel' . $Id ?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        
                        <?php $active = 'active'; ?>
                        
                        <?php while( have_rows('galleria') ) : the_row() ;
                            
                            $image = get_sub_field('immagini_galleria');

                        ?>
                        
                        <div class="carousel-item <?php echo $active; ?>">
                            <img class="w-100" src="<?php echo $image['url'];  ?>" alt="<?php echo $image['alt'];  ?>">
                        </div>
                        
                        <?php $active = ''; ?>		
                        <?php endwhile; ?>
                    </div>
            
                    <a class="carousel-control-prev" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
            
                    <a class="carousel-control-next" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                
                </div>
                <?php  } ?>
            </div> <!--colonna-->
            
        </div><!--riga-->

        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>


<?php get_footer();
