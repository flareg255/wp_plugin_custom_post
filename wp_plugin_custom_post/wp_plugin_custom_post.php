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

$post_type = new WpPluginCustomPost();
$post_type->init();

class WpPluginCustomPost{

    public function init() {
        add_action('init',  array( $this, 'create_post_type' ));
    }

    public function create_post_type() {
        //カスタム投稿タイプがダッシュボードの編集画面で使用する項目を配列で用意
        $supports = array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions'
        );
        //カスタム投稿タイプを追加するための関数
        //第一引数は任意のカスタム投稿タイプ名
        register_post_type('hoge_custom_post',
            array(
                'label' => '自作', //表示名
                'public'        => true, //公開状態
                'exclude_from_search' => false, //検索対象に含めるか
                'show_ui' => true, //管理画面に表示するか
                'show_in_menu' => true, //管理画面のメニューに表示するか
                'menu_position' => 5, //管理メニューの表示位置を指定
                'hierarchical' => true, //階層構造を持たせるか
                'has_archive'   => true, //この投稿タイプのアーカイブを作成するか
                'supports' => array(
                    'title',
                    'editor',
                    'comments',
                    'excerpt',
                    'thumbnail',
                    'custom-fields',
                    'post-formats',
                    'page-attributes',
                    'trackbacks',
                    'revisions',
                    'author'
                )
            )
        );
    }
}