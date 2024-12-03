<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package architex
*/

$footer_bg_img = get_theme_mod( 'architex_footer_bg' );
$architex_footer_logo = get_theme_mod( 'architex_footer_logo' );
$architex_footer_top_space = function_exists('get_field') ? get_field('architex_footer_top_space') : '0';
$architex_copyright_center = $architex_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$architex_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'architex_footer_bg' ) : '';
$architex_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'architex_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'architex_footer_bg_color' );

// bg image
$bg_img = !empty( $architex_footer_bg_url_from_page['url'] ) ? $architex_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $architex_footer_bg_color_from_page ) ? $architex_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
case '4':
    $footer_class[1] = 'col-lg-3 col-md-6 col-sm-12';
    $footer_class[2] = 'col-lg-3 col-md-6';
    $footer_class[3] = 'col-lg-3 col-md-6 com-sm-12';
    $footer_class[4] = 'col-lg-3 col-md-6 col-sm-12';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<!-- Footer Area -->

<footer class="footer-area">
        <div class="container">
            
                <div class="row pt-80 pb-80">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-4 col-md-6 col-sm-12">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class=col-lg-2 col-md-6">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6 col-sm-12">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>                    

                </div>
            
        </div>
        <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="copyright-line"><?php print architex_copyright_text(); ?></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
                </div>
            </div>
        </div>
    </div>
    </footer>
