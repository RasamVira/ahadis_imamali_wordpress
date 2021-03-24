<?php

/*
Plugin Name: احادیث حضرت علی
Plugin URI: https://rasamvira.ir
Description: احادیث حضرت امیر المومنین علی علیه السلام - با این افزونه میتوانید احادیث مولا را در بخش های مختلف سایت نمایش دهید با استفاده از این افزونه شما میتوانید از 60 حدیث موجود در افزونه به صورت تصادفی در نواحی مختلف سایت خود استفاده کنید.
Author: محمد پارسا
Version: 1.0.0
Author URI: https://mohammad-parsa.ir
*/

//Directories And URL
define('DIRIMAMALI' , plugin_dir_path(__FILE__));
define('URLIMAMALI' , plugin_dir_url(__FILE__));
define('INCIMAMALI' , DIRIMAMALI . '/includes/');

//Cheked Admin Panel
if (is_admin()) {
  include INCIMAMALI.'admin/menu.php';
}

//Public Code
  include INCIMAMALI.'functions.php';
  include INCIMAMALI.'public/ahadis.php';
