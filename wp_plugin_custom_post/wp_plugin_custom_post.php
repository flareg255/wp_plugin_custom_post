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

add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
    // remove_menu_page( 'index.php' ); //ダッシュボード
    remove_menu_page( 'edit.php' ); //投稿メニュー
    // remove_menu_page( 'upload.php' ); //メディア
    // remove_menu_page( 'edit.php?post_type=page' ); //ページ追加
    // remove_menu_page( 'edit-comments.php' ); //コメントメニュー
    // remove_menu_page( 'themes.php' ); //外観メニュー
    // remove_menu_page( 'plugins.php' ); //プラグインメニュー
    // remove_menu_page( 'tools.php' ); //ツールメニュー
    // remove_menu_page( 'options-general.php' ); //設定メニュー
}

require_once(dirname(__FILE__) . '/classes/post_type/post_type1.php');

$post_type = new Post_type1();
$post_type->init();

