<?php
add_action('wp_enqueue_scripts','karkas_scripts');

function karkas_scripts() {
wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
wp_enqueue_style('bootstrap-reboot', get_template_directory_uri(  ) . '/assets/css/bootstrap-reboot.min.css');
wp_enqueue_style('owl-carousel', get_template_directory_uri(  ) . '/assets/css/owl.carousel.min.css');
wp_enqueue_style('owl-theme', get_template_directory_uri(  ) . '/assets/css/owl.theme.default.min.css');
wp_enqueue_style('style', get_stylesheet_uri(  ) );

 wp_enqueue_script('jquery');


    wp_enqueue_script( 
  'owl-carousel', 
  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', 
  array('jquery'), 
  null, 
  true 
);

wp_enqueue_style( 
  'owl-carousel', 
  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' 
);

wp_enqueue_style( 
  'owl-theme', 
  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' 
);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/scripts/script.js', array( 'jquery', 'owl-carousel' ), null, true ); 
};


?>



