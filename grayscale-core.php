<?php
/**
* Plugin Name: Grayscale Press
* Plugin URI: https://github.com/lukechanning/grayscale-press
* Description: All-inclusive plugin version of Grayscale Bootstrap theme.
* Version: 1.0 beta
* Author: Luke Patrick
* Author URI: http://routerchowder.com
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
            'name'          => 'Grayscale Info Section',
            'id'            => 'grayscale_info_section',
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
            'before_widget' => '<div id="map" class="map-section">',
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

//Add customizer functionality for Grayscale

    function grayscale_customize_register( $wp_customize ) {

        //Add Custom Header
        $wp_customize->add_section( 'grayscale_logo_section' , array(
        'title'       => __( 'Grayscale Logo', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Upload a logo to replace the default Grayscale name and
        description in the header',
        ) );
        $wp_customize->add_setting( 'grayscale_logo' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'grayscale_logo', array(
        'label'   => __( 'Logo', 'grayscale' ),
        'section' => 'grayscale_logo_section',
        'settings' => 'grayscale_logo',
        ) ) );

        //Add Customize Top Background
        $wp_customize->add_section( 'grayscale_top_background' , array(
        'title'       => __( 'Grayscale Top Photo', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Upload a photo to replace the top-section background, deafult is 1500 x 1125',
        ) );
        $wp_customize->add_setting( 'grayscale_top' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'grayscale_top', array(
        'label'   => __( 'Grayscale Top Photo', 'grayscale' ),
        'section' => 'grayscale_top_background',
        'settings' => 'grayscale_top',
        ) ) );
        
        //Add Customize Info Background
        $wp_customize->add_section( 'grayscale_info_section' , array(
        'title'       => __( 'Grayscale Info Section Photo', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Upload a photo to replace the info-section background, deafult is 1850 by 400',
        ) );
        $wp_customize->add_setting( 'grayscale_info' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'grayscale_info', array(
        'label'   => __( 'Grayscale Info Photo', 'grayscale' ),
        'section' => 'grayscale_info_section',
        'settings' => 'grayscale_info',
        ) ) );
        
        //Add Customize Download Background
        $wp_customize->add_section( 'grayscale_download_section' , array(
        'title'       => __( 'Grayscale Download Photo', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Upload a photo to replace the download-section background, deafult is 1850 by 400',
        ) );
        $wp_customize->add_setting( 'grayscale_download' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'grayscale_download', array(
        'label'   => __( 'Grayscale CTA Photo', 'grayscale' ),
        'section' => 'grayscale_download_section',
        'settings' => 'grayscale_download',
        ) ) );

        $wp_customize->add_section( 'grayscale_colors' , array(
        'title'       => __( 'Grayscale Colors', 'grayscale' ),
        'priority'   => 30,
        'description' => 'Add colors to change the look of Grayscale Press',
        ) );

        //Add section, text, and link colors
        $wp_customize->add_setting( 'section_color' );
        $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 'section_color', array(
                'label'      => __( 'Sections Color', 'grayscale' ),
                'section'    => 'grayscale_colors',
                'settings'   => 'section_color',
            ) )
        );
        $wp_customize->add_setting( 'grayscale_text_color' );
        $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 'grayscale_text_color', array(
                'label'      => __( 'Text Color', 'grayscale' ),
                'section'    => 'grayscale_colors',
                'settings'   => 'grayscale_text_color',
            ) )
        );
        $wp_customize->add_setting( 'grayscale_link_color' );
        $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 'grayscale_link_color', array(
                'label'      => __( 'Link Color', 'grayscale' ),
                'section'    => 'grayscale_colors',
                'settings'   => 'grayscale_link_color',
            ) )
        );

    }
    add_action( 'customize_register', 'grayscale_customize_register' );

//Add custom background 


?>