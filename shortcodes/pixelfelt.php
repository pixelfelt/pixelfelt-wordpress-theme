<?php
/**
 * Displays a draggable/useable bookmarklet as a button
 */
add_shortcode('pixelfelt-bookmarklet', function () {
  global $post;
  $js = file_get_contents(get_stylesheet_directory() . '/js/bookmarklet-loader.js');

  ob_start(); ?>
    <div class="w-btn-wrapper width_auto align_left">
      <a class="w-btn us-btn-style_1" href="javascript:<?= esc_attr($js) ?>">
        <span class="w-btn-label">Pixelfelt 🖐👀🖐</span>
      </a>
    </div>
  <?php return ob_get_clean();
});