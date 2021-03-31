<?php
use MatthiasMullie\Minify;

/**
 * Displays the author of the bookmark
 */
add_shortcode('site-bookmark-last-update', function () {
  global $post;
  return get_the_modified_date();
});

/**
 * Lists links to visit
 */
add_shortcode('site-visit-links', function () {
  global $post;

  $links = get_field('site_links_to_try');
  
  ob_start(); ?>

    <ul class="site-visit-links">
      <?php foreach ($links as $link): ?>
        <li>
          <a href="<?= $link['site_link'] ?>"><?= $link['site_link'] ?></a>
        </li>
      <?php endforeach ?>
    </ul>
    
  <?php return ob_get_clean();
});
