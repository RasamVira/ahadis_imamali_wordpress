<?php

/*
 * Plugin Name: Ahadis Imam Ali
 * Plugin URI: https://rasamvira.ir
 * Description: احادیث حضرت امیر المومنین علی علیه السلام - با این افزونه میتوانید احادیث مولا را در بخش های مختلف سایت نمایش دهید با استفاده از این افزونه شما میتوانید از 60 حدیث موجود در افزونه به صورت تصادفی در نواحی مختلف سایت خود استفاده کنید.
 * Author: محمد پارسا
 * Version: 1.0.0
 * Author URI: https://mohammad-parsa.ir
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Domain Path: /languages
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
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
