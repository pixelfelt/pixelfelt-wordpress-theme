<?php
/**
 * [demo-aframe-look-around]
 */
add_shortcode('demo-aframe-look-around', function () {
  ob_start(); ?>
    <iframe src="<?= get_stylesheet_directory_uri() ?>/shortcodes/demo/aframe-look-around/demo.php" style="width: 100%; height: 400px"></iframe>
  <?php return ob_get_clean();
});