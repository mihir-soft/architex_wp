<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function architex_widgets_init() {

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'architex' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Set Your Blog Widget', 'architex' ),
        'before_widget' => '<div id="%1$s" class="sidebar_widget mb-60 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar__widget_head mb-35"><h3 class="sidebar_widget_title">',
        'after_title'   => '</h3></div>',
    ] );


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer Column %1$s', 'architex' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer Column %1$s', 'architex' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__widget footer-col-'.$num.' %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="footer__widget-title">',
            'after_title'   => '</h5>',
        ] );
    }
 
}
add_action( 'widgets_init', 'architex_widgets_init' );