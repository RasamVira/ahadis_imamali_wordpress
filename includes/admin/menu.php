<?php

function imam_ali_hadis_menu(){
  add_menu_page(
    'حدیث امام علی',
    'حدیث امام علی',
     'manage_options',
     'imam_ali_hadis',
     'imamali_menu_function',
     'dashicons-welcome-widgets-menus',
   );
}

function imamali_menu_function(){
  include 'help.php';
}

add_action( 'admin_menu', 'imam_ali_hadis_menu');