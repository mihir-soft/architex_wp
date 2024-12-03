<?php
/**
 * architex customizer
 *
 * @package architex
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function architex_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'architex_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Architex Customizer', 'architex' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'architex' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'architex' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'architex' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'architex' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'architex' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'architex' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'architex' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'architex' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'architex' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'architex' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'architex' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'architex_customizer',
    ] );
    
}

add_action( 'customize_register', 'architex_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_search',
        'label'    => esc_html__( 'Header Search On/Off', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_phone_num',
        'label'    => esc_html__( 'Phone Number', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 01710222377', 'architex' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_mail_id',
        'label'    => esc_html__( 'Mail ID', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'info@arnav.com', 'architex' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_address',
        'label'    => esc_html__( 'Address', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '3567 Melbourn, EA 265, Australia', 'architex' ),
        'priority' => 10,
    ];    
    
    // Button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_button_text',
        'label'    => esc_html__( 'Button Text', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Make Request', 'architex' ),
        'priority' => 10,
    ];    

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_button_link',
        'label'    => esc_html__( 'Button URL', 'architex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'architex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'architex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'architex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'architex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'architex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'architex' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'architex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'architex' ),
        'description' => esc_html__( 'Upload Your Logo.', 'architex' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'architex' ),
        'description' => esc_html__( 'Header Logo Black', 'architex' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-white.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Off-canvas Area Field 
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];  

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_side_search',
        'label'    => esc_html__( 'Side Search On/Off', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'architex_side_logo',
        'label'       => esc_html__( 'Logo Side', 'architex' ),
        'description' => esc_html__( 'Logo Side', 'architex' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo-white.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'We must explain to you how all seds this mistakens idea off denouncing', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_extra_map',
        'label'    => esc_html__( 'Map Address Iframe', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'architex' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_contact_title',
        'label'    => esc_html__( 'Contact Title', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'architex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_extra_address',
        'label'    => esc_html__( 'Office Address', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Fanta City Tower, NYC', 'architex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_extra_email',
        'label'    => esc_html__( 'Email ID', 'architex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@weblearnbd.net', 'architex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
Breadcrumb Fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'architex' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'architex' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/breadcrumb/about.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'architex_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'architex' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'architex' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'architex' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Hide', 'architex' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Blog Fields 
 */
function _header_blog_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'architex_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'architex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'architex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'architex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer Fields
 */
function _header_footer_fields( $fields ) {

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'architex' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'architex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'architex' ),
            '3' => esc_html__( 'Widget Number 3', 'architex' ),
            '2' => esc_html__( 'Widget Number 2', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'architex_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'architex' ),
        'description' => esc_html__( 'Footer Background Image.', 'architex' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'architex_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'architex' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'architex' ),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'architex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'architex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'architex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'architex' ),
            'off' => esc_html__( 'Disable', 'architex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_copyright',
        'label'    => esc_html__( 'Copy Right', 'architex' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2024 IIDEA INFORMATICS All Rights Reserved', 'architex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// Color Settings
function architex_color_fields( $fields ) {
    
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_1',
        'label'       => __( 'Theme Color 1', 'architex' ),
        'description' => esc_html__( 'This is a Theme color control.', 'architex' ),
        'section'     => 'color_setting',
        'default'     => '#3D6CE7',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_2',
        'label'       => __( 'Theme Color 2', 'architex' ),
        'description' => esc_html__( 'This is a Theme color control.', 'architex' ),
        'section'     => 'color_setting',
        'default'     => '#258E46',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'theme_color_3',
        'label'       => __( 'Theme Color 3', 'architex' ),
        'description' => esc_html__( 'This is a Theme color control.', 'architex' ),
        'section'     => 'color_setting',
        'default'     => '#007A70',
        'priority'    => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'architex_color_fields' );

// 404 Settings
function architex_404_fields( $fields ) {
    
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'architex_404_bg',
        'label'       => esc_html__( '404 Image.', 'architex' ),
        'description' => esc_html__( '404 Image.', 'architex' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_error_title',
        'label'    => esc_html__( 'Not Found Title', 'architex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'architex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'architex_error_desc',
        'label'    => esc_html__( '404 Description Text', 'architex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'architex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'architex_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'architex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'architex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'architex_404_fields' );


/**
 * Typography Fields
 */
function architex_typo_fields( $fields ) {
    
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'architex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'architex_typo_fields' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function ARCHITEX_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'architex' ) ) {
        $value = Kirki::get_option( architex_get_theme(), $name );
    }

    return apply_filters( 'ARCHITEX_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function architex_get_theme() {
    return 'architex';
}