<?php
function my_block_asset()
{
  global $post;
  if ($post && $post->post_type == 'post') {
    wp_enqueue_style(
      'post',
      get_template_directory_uri() . '/assets/css/post.css',
      array(),
      filemtime(get_theme_file_path('assets/css/post.css')),
      'all'
    );
  }

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


function add_category_badge()
{
  register_block_style(
    'core/post-terms',
    array(
      'name'  => 'category-badge',
      'label' => 'バッジ'
    )
  );
}
add_action('init', 'add_category_badge');
