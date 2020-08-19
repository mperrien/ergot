<?php
/**
 * Template part for displaying the french footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 */

?>
<div class="footer__quote">
  <?php
    $quote = get_field('footer-french', 'option');
    if ($quote) :
      echo $quote;
    endif;
  ?>
</div>
<div class="footer__navigation">
  <nav>
  <?php
    wp_nav_menu(
      array(
        'menu' => 'FR_footer',
      )
    );
  ?>
  </nav>
</div>