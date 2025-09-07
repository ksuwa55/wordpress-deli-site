<?php
// Read css of child theme later than parent theme
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style(
    'kitchenstudio-theme-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
});
