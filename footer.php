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
    $page = get_page_by_path( 'es' );
    $id = $page->ID;
    $ancestors = get_post_ancestors($post->ID);
    if (in_array($id, $ancestors) || is_page($id)) {
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
