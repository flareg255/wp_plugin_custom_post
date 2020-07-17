<?php
/*
Plugin Name: test custom post plugin
Plugin URI: 
Description: カスタム投稿プラグインテストです
Version: 1.0.0
Author:geregere
Author URI: http://example.com
License: GPL2
Copyright 2020 geregere (email : info@ultrazone.blue)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// require_once(dirname(__FILE__) . '/classes/post_type/post_type1.php');

// $post_type = new post_type1();
// $post_type->init();

require_once(dirname(__FILE__) . '/classes/custom_post_type.php');

$post_type2 = new CustomPostType();
$post_type2->init();

