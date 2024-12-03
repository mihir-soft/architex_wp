<?php

/**
 * architex_scripts description
 * @return [type] [description]
 */
function architex_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'bootstrap', ARCHITEX_THEME_CSS_DIR . 'bootstrap.min.css', [] );
    wp_enqueue_style( 'line-awesome', ARCHITEX_THEME_CSS_DIR . 'line-awesome.min.css', [] );
    wp_enqueue_style( 'font-awesome-pro', ARCHITEX_THEME_CSS_DIR . 'fontAwesomePro.css', [] );
    wp_enqueue_style( 'animate', ARCHITEX_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'barfiller', ARCHITEX_THEME_CSS_DIR . 'barfiller.css', [] );
    wp_enqueue_style( 'magnific-popup', ARCHITEX_THEME_CSS_DIR . 'magnific-popup.css', [] );    
    wp_enqueue_style( 'owl-carousel', ARCHITEX_THEME_CSS_DIR . 'owl.carousel.css', [] );
    wp_enqueue_style( 'slick', ARCHITEX_THEME_CSS_DIR . 'slick.css', [] );
    wp_enqueue_style( 'nice-select', ARCHITEX_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'metismenu', ARCHITEX_THEME_CSS_DIR . 'metismenu.css', [] );
    wp_enqueue_style( 'architex-core', ARCHITEX_THEME_CSS_DIR . 'architex-core.css', [], time() );
    wp_enqueue_style( 'architex-responsive', ARCHITEX_THEME_CSS_DIR . 'responsive.css', [], time() );
    wp_enqueue_style( 'architex-unit', ARCHITEX_THEME_CSS_DIR . 'architex-unit.css', [], time() );
    wp_enqueue_style( 'architex-custom', ARCHITEX_THEME_CSS_DIR . 'architex-custom.css', [] );
    wp_enqueue_style( 'architex-style', get_stylesheet_uri() );
    

    // all js
    wp_enqueue_script( 'popper', ARCHITEX_THEME_JS_DIR . 'popper.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'bootstrap', ARCHITEX_THEME_JS_DIR . 'bootstrap.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', ARCHITEX_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'waypoints', ARCHITEX_THEME_JS_DIR . 'jquery.waypoints.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', ARCHITEX_THEME_JS_DIR . 'jquery.counterup.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', ARCHITEX_THEME_JS_DIR . 'owl.carousel.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'slick', ARCHITEX_THEME_JS_DIR . 'slick.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', ARCHITEX_THEME_JS_DIR . 'magnific-popup.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'isotope-pkgd', ARCHITEX_THEME_JS_DIR . 'isotope-3.0.6-min.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'sticky', ARCHITEX_THEME_JS_DIR . 'jquery.sticky.js', false, true );
    wp_enqueue_script( 'nice-select', ARCHITEX_THEME_JS_DIR . 'jquery.nice-select.min.js', [ 'jquery' ], '', true );    
    wp_enqueue_script( 'metismenu.js', ARCHITEX_THEME_JS_DIR . 'metismenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'barfiller', ARCHITEX_THEME_JS_DIR . 'jquery.barfiller.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'circle-progress', ARCHITEX_THEME_JS_DIR . 'circle-progress.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'architex-main', ARCHITEX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'architex_scripts' );

/*
Register Fonts
 */
function architex_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'architex' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap';
    }
    return $font_url;
}