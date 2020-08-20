<?php
/**
 * The template for displaying the Accompaniment page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 * 
 * Template Name: Accompagnement
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/banner' ); ?>
      <section class="container">
      <?php
      $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
      );
      $children = new WP_Query( $args );
      if ( $children->have_posts() ) : ?>
        <?php while ( $children->have_posts() ) : $children->the_post(); ?>
          <article class="audience">
            <div class="audience__image">
              <?php the_post_thumbnail(get_the_ID()); ?>
            </div>
            <h2 class="audience__title">
              <span><?php the_title(); ?></span>
            </h2>
            <div class="audience__excerpt copy">
              <?php the_field('introduction', get_the_ID()); ?>
            </div>
            <div class="audience__cta">
              <a class="button" href="<?php the_permalink(); ?>">
                <?php
                $lang = wp_cache_get( 'lang' );
                echo esc_html(get_field('read-more-' . $lang, 'option'));
                ?>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
      </section>
      
      
		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer();
