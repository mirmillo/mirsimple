<?php
/**
 * The template for displaying the footer.
 */
?>
<!--[if IE 8 ]>    <div id="footer"> <![endif]-->
<footer>
 <?php /* <a href="http://d/wordpress-stable/apples/" class="iframeFancybox" id="contact">{ Contact } </a> */ ?>
<a href="http://mirmillo.com/contact/" class="fancybox" id="contact">{ Contact } </a>
  <?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' ); /*
?>
  <div id="site-info"> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
    </a> </div>
  <!-- #site-info -->
  <div id="site-generator">
    <?php do_action( 'twentyten_credits' ); ?>
    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a> </div>
  <!-- #site-generator --> */ ?>
</footer>
<!--[if IE 8 ]>    </div> <![endif]-->
</div>
<!-- #container -->
<?php
	wp_footer();
?>
</body></html>