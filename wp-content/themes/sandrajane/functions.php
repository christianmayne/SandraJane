<?php 

function register_my_menus() {
  register_nav_menus(
    array('left-menu' => __( 'Left Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );

?>

