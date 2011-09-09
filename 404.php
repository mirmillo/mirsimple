<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="container">
  <div id="content">
    <div id="photo"></div>
    <article id="loop" class="post error404 not-found">
      <h1 class="entry-title">
       Wee Woo!
      </h1>
      <p>Sorry, that page is no longer here.</p>
      <?php /* <div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content --> */ ?>
    </article>
    <!-- #post-0 -->
  </div>
  <!-- #content -->
</div>
<!-- #container -->
<?php /* <script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script> */ ?>
<?php get_footer(); ?>
