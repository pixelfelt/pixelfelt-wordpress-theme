<?php
/**
 * Displays a random link from the handsfreejs-example
 */
add_shortcode('handsfreejs-example-link', function () {
  global $post;

  $link = get_field('handsfreejs_example_link');
  $html = '<p><strong>No links found</strong></p>';

  if ($link):
    ob_start(); ?>
      <div><strong>Example link</strong>: <a href="<?= $link ?>">Try it!</a>
    <?php $html = ob_get_clean();
  endif;

  return $html;
});

/**
 * Displays a random link with site description
 */
add_shortcode('handsfreejs-example-description', function () {
  global $post;

  $description = get_field('handsfreejs_example_description');
  $html = '';

  if ($description):
    ob_start(); ?>
      <div><?= $description ?></div>
    <?php $html = ob_get_clean();
  endif;

  return do_shortcode($html);
});
