<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
function ag_emme_fer_scripts()
{
  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
    require_once __DIR__ . '/theme-styles.php';
  }

  // wp_enqueue_script('ag_emme_fer-form-styler-js', get_template_directory_uri() . '/assets/libs/jquery-form-styler/jquery.formstyler.min.js', ['jquery'], null, true);
  // wp_enqueue_script('bs_eti_srl-magnific-js', get_template_directory_uri() . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js', ['jquery'], null, true);
  // wp_enqueue_script('ag_emme_fer-lightgallery-js', get_template_directory_uri() . '/assets/libs/lightgallery.js/dist/js/lightgallery.min.js', ['jquery'], null, true);
  wp_enqueue_script('ag_emme_fer-slick-js', get_template_directory_uri() . '/assets/libs/slick/slick/slick.min.js', ['jquery'], null, true);
  wp_enqueue_script('ag_emme_fer-custom-jquery-js', get_template_directory_uri() . '/assets/js/custom-jquery.js', ['jquery'], null, true);
}

add_action('wp_enqueue_scripts', 'ag_emme_fer_scripts', 15);
