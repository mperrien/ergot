<?php
/**
 * Template part for displaying the spanish footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ergot
 */

?>
<div class="footer__quote">
  <?php
    $quote = get_field('footer-spanish', 'option');
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
        'menu' => 'ES_footer',
      )
    );
  ?>
  </nav>
</div>