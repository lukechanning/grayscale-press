<?php
/**
* Plugin Name: Grayscale Press
* Plugin URI: https://github.com/lukechanning/grayscale-press
* Description: All-inclusive plugin version of Grayscale Bootstrap theme.
* Version: 0.1 beta
* Author: Luke Patrick
* Author URI: http://snodandjeff.com
* License: Apache License v2.0
*/

/* Add custom landing page template
------------------------------------- */
        class templaterCore {

                protected $plugin_slug;
                private static $instance;
                protected $templates;

                public static function get_instance() {

                        if( null == self::$instance ) {
                                self::$instance = new templaterCore();
                        } 

                        return self::$instance;

                } 

                private function __construct() {

                        $this->templates = array();
                        add_filter(
                                                'page_attributes_dropdown_pages_args',
                                                 array( $this, 'register_project_templates' ) 
                                        );
                        add_filter(
                                                'wp_insert_post_data', 
                                                array( $this, 'register_project_templates' ) 
                                        );
                        add_filter(
                                                'template_include', 
                                                array( $this, 'view_project_template') 
                                        );
                        $this->templates = array(
                                'page-grayscale.php'     => 'Grayscale Landing Page',
                        );                      
                } 

                public function register_project_templates( $atts ) {

                        $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

                        $templates = wp_get_theme()->get_page_templates();
                                if ( empty( $templates ) ) {
                                        $templates = array();
                        } 

                        wp_cache_delete( $cache_key , 'themes');
                        $templates = array_merge( $templates, $this->templates );
                        wp_cache_add( $cache_key, $templates, 'themes', 1800 );

                        return $atts;

                } 

                public function view_project_template( $template ) {

                        global $post;
                        if (!isset($this->templates[get_post_meta( 
                                                $post->ID, '_wp_page_template', true 
                                        )] ) ) {        
                                return $template;       
                        } 

                        $file = plugin_dir_path(__FILE__). get_post_meta( 
                                                $post->ID, '_wp_page_template', true 
                                        );

                        if( file_exists( $file ) ) {
                                return $file;
                        } 
                                        else { echo $file; }

                        return $template;

                } 
        } 

        add_action( 'plugins_loaded', array( 'templaterCore', 'get_instance' ) );

/* Register widget area
------------------------------- */

    function grayscale_widgets() {

        register_sidebar( array(
            'name'          => 'Grayscale Intro Section',
            'id'            => 'grayscale_intro_section',
            'before_widget' => '<div class="col-md-8 col-md-offset-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="brand-heading">',
            'after_title'   => '</h1>',
        ) );
        register_sidebar( array(
            'name'          => 'Grayscale About Section',
            'id'            => 'grayscale_about_section',
            'before_widget' => '<div class="col-lg-8 col-lg-offset-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Grayscale Contact Section',
            'id'            => 'grayscale_contact_section',
            'before_widget' => '<div class="col-lg-8 col-lg-offset-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Grayscale CTA Section',
            'id'            => 'grayscale_cta_section',
            'before_widget' => '<div class="col-lg-8 col-lg-offset-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Grayscale Final Section',
            'id'            => 'grayscale_last_section',
            'before_widget' => '<div class="col-lg-8 col-lg-offset-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => 'Grayscale Map Section',
            'id'            => 'grayscale_map_section',
            'before_widget' => '<div id="map">',
            'after_widget'  => '</div>',
        ) );

    }
    add_action( 'widgets_init', 'grayscale_widgets' );

//Add Menu Location

    function register_grayscale_menu() {
      register_nav_menus(
        array(  
            'grayscale_navigation' => __( 'Grayscale Navigation' )
        )
      );
    } 
    add_action( 'init', 'register_grayscale_menu' );

//Add customizer functionality for Grayscale logo

    function grayscale_logo_register( $wp_customize ) {
        $wp_customize->add_section( 'grayscale_logo_section' , array(
        'title'       => __( 'Grayscale Logo', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Upload a logo to replace the default Grayscale name and
        description in the header',
        ) );
        $wp_customize->add_setting( 'grayscale_logo' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'grayscale_logo', array(
        'label'   => __( 'Logo', 'themeslug' ),
        'section' => 'grayscale_logo_section',
        'settings' => 'grayscale_logo',
        ) ) );
    }
    add_action( 'customize_register', 'grayscale_logo_register' );


?>