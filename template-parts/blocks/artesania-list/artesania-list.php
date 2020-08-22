<?php

/**
 * Arte/san(í)a List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'artesania-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'artesania-list';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$list = get_field('items');
?>
<ol id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <?php foreach($list as $item) : ?>
    <li class="artesania-list__item">
      <div class="artesania-list__image">
        <?php echo wp_get_attachment_image( $item["image"], "medium" ); ?>
      </div>
      <div class="artesania-list__text">
        <?php echo $item["text"]; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ol>