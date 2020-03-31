<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-primary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

  <footer class="container">
    <div class="row py-3">

      <div class="col-12 col-sm-4 footer-col text-center">
        <h6 class="pb-3">CONTATTI</h6>
        <ul class="pl-0">
          <li style="font-size: 30px;" class="list-inline-item mr-5"><a href="#"><i class="fas fa-phone-alt"></i></a></li>
          <li style="font-size: 30px;" class="list-inline-item"><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>

      <div class="col-12 col-sm-4 footer-col text-center">
        <h6 class="pb-3">SOCIAL</h6>
        <ul class="list-inline pl-0">
          <li style="font-size: 30px;" class="list-inline-item mr-5"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li style="font-size: 30px;" class="list-inline-item mr-5"><a href="#"><i class="fab fa-behance"></i></a></li>
          <li style="font-size: 30px;" class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        </ul>
      </div>

      <div class="col-12 col-sm-4 text-center">
      <p>Made with <i class="fab fa-wordpress"></i> and <i class="fas fa-heart"></i> by <a class="matacotti" href="https://matacottidesign.it" target="_blank">Matacotti Design</a></p>
      </div>

    </div>
  </footer>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!--Navbar Animation-->
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
    var currentScrollpos = window.pageYOffset;

      if (prevScrollpos > currentScrollpos) {
        //document.getElementsByTagName("nav")[0].style.backgroundColor = 'red';
      } 
      else {
        document.getElementsByTagName("nav")[0].style.backgroundColor = '#343a40';
      }

      if(currentScrollpos === 0){
        document.getElementsByTagName("nav")[0].style.backgroundColor = 'rgba(255,255,255,0)';
      }

      prevScrollpos = currentScrollpos;
    };
</script>

</body>

</html>

