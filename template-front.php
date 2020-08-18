<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 * 
 * Template Name: Accueil
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

      get_template_part( 'template-parts/banner' ); ?>
      
      <div class="container accompaniment">
      <?php
        $kids = get_field('kids');
        if ($kids) : ?>
          <section class="audience audience--kids">
            <div class="audience__content">
              <h2 class="audience__title">
                <?php echo esc_html($kids['title']); ?>
              </h2>
              <div class="audience__text">
              <?php echo $kids['content']; ?>
              </div>
              <a href="<?php echo esc_url($kids['link']); ?>" class="button button--orange">
                <?php echo esc_html($kids['button']); ?>
              </a>
            </div>
            <div class="audience__image">
            <?php
              $image = $kids['image'];
              $small = $image['sizes']['medium'];
              $small_width = $image['sizes']['medium-width'];
              $large = $image['sizes']['large'];
              $large_width = $image['sizes']['large-width'];
            ?>
            <img srcset="<?php echo $small; ?> <?php echo $small_width; ?>w,
                         <?php echo $large; ?> <?php echo $large_width; ?>w"
                  sizes="(max-width: 480px) 480px,
                          800px"
                  src="<?php echo $large; ?>" alt="" loading="lazy">
            </div>
          </section>
        <?php endif;
      ?>
      </div>

    <?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer();
