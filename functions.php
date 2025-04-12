<?php
function my_block_asset()
{
  wp_enqueue_style(
    'morning-start',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    filemtime(get_theme_file_path('assets/css/style.css')),
    'all'
  );
}
add_action('enqueue_block_assets', 'my_block_asset');


function add_default_arrow_button()
{
  register_block_style(
    'core/button',
    array(
      'name'  => 'default-arrow-button',
      'label' => '矢印付き(Default)'
    )
  );
}
add_action('init', 'add_default_arrow_button');


function add_priority_arrow_button()
{
  register_block_style(
    'core/button',
    array(
      'name'  => 'priority-arrow-button',
      'label' => '矢印付き(Priority)'
    )
  );
}
add_action('init', 'add_priority_arrow_button');