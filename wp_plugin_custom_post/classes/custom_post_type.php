<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class CustomPostType{

    public function init() {
        add_action( 'init',  array( $this, 'create_post_type' ) );
        add_action( 'init', array( $this, 'template_settings') );
    }

    public function create_post_type() {

        $args = array(
            'public' => true,
            'label'  => 'Books',
            'show_in_rest' => true,
            'template' => array(
                array( 'core/image', array(
                    'align' => 'left',
                ) ),
                array( 'core/heading', array(
                    'placeholder' => 'Add Author...',
                ) ),
                array( 'core/paragraph', array(
                    'placeholder' => 'Add Description...',
                ) ),
            ),
            'template_lock' => 'all'
        );

        register_post_type( 'book', $args );
    }

    function template_settings() {

        $post_type_object = get_post_type_object( 'book' );
        $post_type_object->template = array(
            array( 'core/image', array(
                'align' => 'left'
            ) ),
            array( 'core/heading', array(
                'placeholder' => 'Add Author...'
            ) ),
            array( 'core/paragraph', array(
                'placeholder' => 'Add Description...'
            ) ),
        );

        $post_type_object->template_lock = 'all';

    }
}