<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

    <section>       
        <div class="container">
            <!--testo iniziale-->
            <?php //the_content(); ?>
        </div> 
    </section>


    <!--Hero-->
    <!--Slider iniziale-->
    <?php if( have_rows('slider_iniziale') ) { ?>
		    
        <?php
            $num = 0;
            $active = 'active';
        ?>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                
                <?php while( have_rows('slider_iniziale') ) : the_row() ; ?>
                    
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $num; ?>" class="<?php echo $active; ?>"></li>
                
                <?php 
                    $num++;
                    $active = '';
                ?>
                
                <?php endwhile; ?>
                
            </ol> -->
            <div class="carousel-inner">
                
                <?php $active = 'active'; ?>
                
                <?php while( have_rows('slider_iniziale') ) : the_row() ;
                    
                    $image = get_sub_field('immagini_slider_iniziale');

                ?>
                
                <div class="carousel-item <?php echo $active; ?>">
                    <img class="d-block w-100" src="<?php echo $image['url'];  ?>" alt="<?php echo $image['alt'];  ?>">
                </div>
                
                <?php $active = ''; ?>
                
                <?php endwhile; ?>
            </div>
        
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        
        </div>
        
    <?php  } ?>



    <!--Servizi offerti-->
    <div class="py-8">
        <div class="container">
            <div class="mb-5 text-center">
                <h1><?php the_field('intestazione_servizi'); ?></h1>
            </div>
            <div class="row">
                <?php if( have_rows('servizi_offerti') ): ?>
                    <?php while( have_rows('servizi_offerti') ): the_row(); 

                        // vars
                        $image = get_sub_field('icona_servizio');
                        $content = get_sub_field('descrizione_servizio');

                        ?>

                        <div class="col-12 col-lg-3">
                            <div class="card px-3 pt-3 pb-0 text-center">
                                <div class="d-flex justify-content-center">
                                    <img class="mb-4" width="50px" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>
                                <?php echo $content; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-center">
                <button class="mt-5 main-btn btn btn-primary">
                    <?php 
                    $link = get_field('link_contatti');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
















<?php endwhile; ?>

<?php get_footer(); ?>
