<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class CustomPostType{

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
                'exclude_from_search' => true, //検索対象に含めるか
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