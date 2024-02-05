<?php

/**
 * @file
 * template.php
 */

// Remove Height and Width Inline Styles from Drupal Images
function wedigbio_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];
  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}

function wedigbio_theme_image($variables) {
  // clear width and height if set.
  foreach (array('width', 'height') as $key) {
    if (isset($variables[$key])) {
      unset($variables[$key]);
    }
  }
  // Now we can call core theme_image() function directly.
  return theme_image($variables);
}