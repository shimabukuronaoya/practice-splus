
<?php
// function my_enqueue_scripts() {
//     wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
// }
// add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css' );
  } );
?>