<?php

// Add Menu Suport To Back End
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'side-menu' => __( 'Side Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>