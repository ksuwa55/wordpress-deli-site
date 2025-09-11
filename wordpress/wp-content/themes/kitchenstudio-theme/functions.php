<?php
// Read css of child theme later than parent theme
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style(
    'kitchenstudio-theme-style',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
});
