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
            <?php the_content(); ?>
        </div> 
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
