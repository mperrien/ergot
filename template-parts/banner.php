<?php
/**
 * Template part for displaying the banner of each page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 */

?>
<div class="page-banner">
  <div class="page-banner__content">
    <?php
      the_title( '<h1 class="page-title">', '</h1>' );
      the_content();
      $button = get_field('main-button');
      if ($button) : ?>
        <a href="<?php echo esc_url($button['url']); ?>" class="button">
          <?php echo esc_html($button['text']); ?>
        </a>
      <?php endif;
    ?>
  </div>
  <div class="page-banner__image">
    <?php the_post_thumbnail(); ?>
  </div>
</div>
