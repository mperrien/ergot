<?php
/**
 * The template for displaying the Wha Are We? page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 * 
 * Template Name: Équipe
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/banner' );
      $ot = get_field('ot');
      if ($ot) : ?>
        <section class="team container">
        <?php foreach($ot as $ergo) : ?>
            <article class="ot">
              <div class="ot__presentation">
                <h2 class="ot__name"><?php echo esc_html($ergo['name']); ?></h2>
                <div class="ot_resume">
                  <?php echo $ergo['presentation']; ?>
                </div>
              </div>
              <div class="ot__image">
                <?php echo wp_get_attachment_image( $ergo['image'], 'medium_large' ); ?>
              </div>
            </article>
        <?php endforeach; ?>
        </section>
      <?php endif;?>
      
      
      
		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer();
