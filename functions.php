<?php
function my_block_asset() {
  wp_enqueue_style(
    'morning-start',
    get_template_directory_uri().'/assets/css/style.css',
    array(),
    filemtime(get_theme_file_path('assets/css/style.css')),
    'all'
  );
}
add_action('enqueue_block_assets', 'my_block_asset');