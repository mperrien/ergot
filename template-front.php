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
        $adults = get_field('adults');
        if ($adults) : ?>
          <section class="audience audience--adults">
            <div class="audience__content">
              <h2 class="audience__title">
                <?php echo esc_html($adults['title']); ?>
              </h2>
              <div class="audience__text">
              <?php echo $adults['content']; ?>
              </div>
              <a href="<?php echo esc_url($adults['link']); ?>" class="button button--purple">
                <?php echo esc_html($adults['button']); ?>
              </a>
            </div>
            <div class="audience__image">
            <?php
              $image = $adults['image'];
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
        $elderly = get_field('elderly');
        if ($elderly) : ?>
          <section class="audience audience--elderly">
            <div class="audience__content">
              <h2 class="audience__title">
                <?php echo esc_html($elderly['title']); ?>
              </h2>
              <div class="audience__text">
              <?php echo $elderly['content']; ?>
              </div>
              <a href="<?php echo esc_url($elderly['link']); ?>" class="button button--blue">
                <?php echo esc_html($elderly['button']); ?>
              </a>
            </div>
            <div class="audience__image">
            <?php
              $image = $elderly['image'];
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
        <?php endif; ?>
      </div>
      <?php
      $artesania = get_field('artesania');
      if ($artesania) : ?>
      <div class="artesania">
        <div class="artesania__image">
        <?php
          $image = $artesania['image'];
          $small = $image['sizes']['medium'];
          $small_width = $image['sizes']['medium-width'];
          $medium = $image['sizes']['medium_large'];
          $medium_width = $image['sizes']['medium_large-width'];
          $large = $image['url'];
          $large_width = $image['width'];
        ?>
        <img srcset="<?php echo $small; ?> <?php echo $small_width; ?>w,
                      <?php echo $medium; ?> <?php echo $medium_width; ?>w,
                      <?php echo $large; ?> <?php echo $large_width; ?>w"
              sizes="100%"
              src="<?php echo $large; ?>" alt="" loading="lazy">
        </div>
        <div class="container">
          <h2 class="artesania__title">
            <?php echo esc_html($artesania['title']); ?>
          </h2>
          <div class="artesania__content copy">
            <?php echo $artesania['content']; ?>
          </div>
          <div class="artesania__cta">
            <a class="button button--reverse button--reverse-purple" href="<?php echo esc_url($artesania['button-link']); ?>">
              <?php echo esc_html($artesania['button-text']); ?>
            </a>
          </div>
        </div>
      </div>
      <?php endif;
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer();
