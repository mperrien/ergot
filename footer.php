<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ergot
 */

?>

	<footer class="site-footer">
  <?php
    $lang = wp_cache_get( 'lang' );
    if ($lang === 'es') {
      get_template_part( 'template-parts/footer', 'spanish' );
    } else {
      get_template_part( 'template-parts/footer', 'french' );
    }
  ?>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
