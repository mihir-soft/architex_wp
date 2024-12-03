<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package architex
 */

/** 
 *
 * architex header
 */

function architex_check_header() {
    $architex_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $architex_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $architex_header_style == 'header-style-1' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-1' );
    } 
    elseif ( $architex_header_style == 'header-style-2' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-2' );
    } 
    elseif ( $architex_header_style == 'header-style-3' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-3' );
    } 
    else {

        /** default header style **/
        if ( $architex_default_header_style == 'header-style-2' ) {
            get_template_part( 'template-parts/header/header-2' );
        } 
        elseif ( $architex_default_header_style == 'header-style-3' ) {
            get_template_part( 'template-parts/header/header-3' );
        }
        else {
            get_template_part( 'template-parts/header/header-1' );
        }
    }

}
add_action( 'architex_header_style', 'architex_check_header', 10 );


/**
 * [architex_header_lang description]
 * @return [type] [description]
 */
function architex_header_lang_defualt() {
    $architex_header_lang = get_theme_mod( 'architex_header_lang', false );
    if ( $architex_header_lang ): ?>

    <ul>
        <li><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__( 'English', 'architex' );?> <i class="fal fa-angle-down"></i></a>
        <?php do_action( 'architex_language' );?>
        </li>
    </ul>

    <?php endif;?>
<?php
}

/**
 * [architex_language_list description]
 * @return [type] [description]
 */
function _architex_language( $mar ) {
    return $mar;
}
function architex_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'English', 'architex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Bangla', 'architex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'French', 'architex' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _architex_language( $mar );
}
add_action( 'architex_language', 'architex_language_list' );


// header logo
function architex_header_logo() { ?>
      <?php
        $architex_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $architex_logo = get_template_directory_uri() . '/assets/img/logo/logo.png';
        $architex_logo_white = get_template_directory_uri() . '/assets/img/logo/logo-white.png';

        $architex_site_logo = get_theme_mod( 'logo', $architex_logo );
        $architex_secondary_logo = get_theme_mod( 'seconday_logo', $architex_logo_white );
      ?>

      <?php if ( !empty( $architex_logo_on ) ) : ?>
         <a class="secondary-logo" href="<?php print esc_url( home_url( '/' ) );?>">
             <img src="<?php print esc_url( $architex_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'architex' );?>" />
         </a>
      <?php else : ?>
         <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
             <img src="<?php print esc_url( $architex_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'architex' );?>" />
         </a>
      <?php endif; ?>
   <?php
}

// header logo
function architex_header_sticky_logo() {?>
    <?php
        $architex_logo_white = get_template_directory_uri() . '/assets/img/logo/logo-white.png';
        $architex_secondary_logo = get_theme_mod( 'seconday_logo', $architex_logo_white );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $architex_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'architex' );?>" />
      </a>
    <?php
}

function architex_mobile_logo() {
    // side info
    $architex_mobile_logo_hide = get_theme_mod( 'architex_mobile_logo_hide', false );

    $architex_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png' );

    ?>

    <?php if ( !empty( $architex_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $architex_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'architex' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }

/**
 * [architex_header_social_profiles description]
 * @return [type] [description]
 */
function architex_header_social_profiles() {
    $architex_topbar_fb_url = get_theme_mod( 'architex_topbar_fb_url', __( '#', 'architex' ) );
    $architex_topbar_twitter_url = get_theme_mod( 'architex_topbar_twitter_url', __( '#', 'architex' ) );
    $architex_topbar_instagram_url = get_theme_mod( 'architex_topbar_instagram_url', __( '#', 'architex' ) );
    $architex_topbar_linkedin_url = get_theme_mod( 'architex_topbar_linkedin_url', __( '#', 'architex' ) );
    $architex_topbar_youtube_url = get_theme_mod( 'architex_topbar_youtube_url', __( '#', 'architex' ) );
    ?>
        <ul>
        <?php if ( !empty( $architex_topbar_fb_url ) ): ?>
          <a href="<?php print esc_url( $architex_topbar_fb_url );?>"><span><i class="fab fa-facebook-f"></i></span></a>
        <?php endif;?>

        <?php if ( !empty( $architex_topbar_twitter_url ) ): ?>
            <a href="<?php print esc_url( $architex_topbar_twitter_url );?>"><span><i class="fab fa-twitter"></i></span></a>
        <?php endif;?>

        <?php if ( !empty( $architex_topbar_instagram_url ) ): ?>
            <a href="<?php print esc_url( $architex_topbar_instagram_url );?>"><span><i class="fab fa-instagram"></i></span></a>
        <?php endif;?>

        <?php if ( !empty( $architex_topbar_linkedin_url ) ): ?>
            <a href="<?php print esc_url( $architex_topbar_linkedin_url );?>"><span><i class="fab fa-linkedin"></i></span></a>
        <?php endif;?>

        <?php if ( !empty( $architex_topbar_youtube_url ) ): ?>
            <a href="<?php print esc_url( $architex_topbar_youtube_url );?>"><span><i class="fab fa-youtube"></i></span></a>
        <?php endif;?>
        </ul>

<?php
}

function architex_footer_social_profiles() {
    $architex_footer_fb_url = get_theme_mod( 'architex_footer_fb_url', __( '#', 'architex' ) );
    $architex_footer_twitter_url = get_theme_mod( 'architex_footer_twitter_url', __( '#', 'architex' ) );
    $architex_footer_instagram_url = get_theme_mod( 'architex_footer_instagram_url', __( '#', 'architex' ) );
    $architex_footer_linkedin_url = get_theme_mod( 'architex_footer_linkedin_url', __( '#', 'architex' ) );
    $architex_footer_youtube_url = get_theme_mod( 'architex_footer_youtube_url', __( '#', 'architex' ) );
    ?>

        <ul>
        <?php if ( !empty( $architex_footer_fb_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $architex_footer_fb_url );?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $architex_footer_twitter_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $architex_footer_twitter_url );?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $architex_footer_instagram_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $architex_footer_instagram_url );?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $architex_footer_linkedin_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $architex_footer_linkedin_url );?>">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $architex_footer_youtube_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $architex_footer_youtube_url );?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif;?>
        </ul>
<?php
}

/**
 * [architex_header_menu description]
 * @return [type] [description]
 */
function architex_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'architex_Navwalker_Class::fallback',
            'walker'         => new architex_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [architex_header_menu description]
 * @return [type] [description]
 */
function architex_mobile_menu() {
    ?>
    <?php
        $architex_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => 'metismenu',
            'container'      => '',
            'menu_id'        => 'mobile-menu',
            'echo'           => false,
        ] );

    $architex_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $architex_menu );
        echo wp_kses_post( $architex_menu );
    ?>
    <?php
}

/**
 * [architex_search_menu description]
 * @return [type] [description]
 */
function architex_header_search_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'architex_Navwalker_Class::fallback',
            'walker'         => new architex_Navwalker_Class,
        ] );
    ?>
    <?php
}


/**
 * [architex_category_menu description]
 * @return [type] [description]
 */
function architex_category_menu() {
    wp_nav_menu( [
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'architex_Navwalker_Class::fallback',
        'walker'         => new architex_Navwalker_Class,
    ] );
}

/**
 *
 * architex footer
 */
add_action( 'architex_footer_style', 'architex_check_footer', 10 );

function architex_check_footer() {
    $architex_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $architex_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $architex_footer_style == 'footer-style-1' ) {
        get_template_part( 'template-parts/footer/footer-1' );
    } 
    elseif ( $architex_footer_style == 'footer-style-2' ) {
        get_template_part( 'template-parts/footer/footer-2' );
    } 
    elseif ( $architex_footer_style == 'footer-style-3' ) {
        get_template_part( 'template-parts/footer/footer-3' );
    }
    elseif ( $architex_footer_style == 'footer-style-4' ) {
        get_template_part( 'template-parts/footer/footer-4' );
    } else {

        /** default footer style **/
        if ( $architex_default_footer_style == 'footer-style-2' ) {
            get_template_part( 'template-parts/footer/footer-2' );
        } 
        elseif ( $architex_default_footer_style == 'footer-style-3' ) {
            get_template_part( 'template-parts/footer/footer-3' );
        } 
        elseif ( $architex_default_footer_style == 'footer-style-4' ) {
            get_template_part( 'template-parts/footer/footer-4' );
        } 
        else {
            get_template_part( 'template-parts/footer/footer-1' );
        }

    }
}

// architex_copyright_text
function architex_copyright_text() {
   print get_theme_mod( 'architex_copyright', esc_html__( '© 2023 Architex. All rights reserved.', 'architex' ) );
}



/**
 *
 * pagination
 */
if ( !function_exists( 'architex_pagination' ) ) {

    function _architex_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function architex_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _architex_pagi_callback( $pagi );
    }
}


// header top bg color
function architex_breadcrumb_bg_color() {
    $color_code = get_theme_mod( 'architex_breadcrumb_bg_color', '#222' );
    wp_enqueue_style( 'architex-custom', ARCHITEX_THEME_CSS_DIR . 'architex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style( 'architex-breadcrumb-bg', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'architex_breadcrumb_bg_color' );

// breadcrumb-spacing top
function architex_breadcrumb_spacing() {
    $padding_px = get_theme_mod( 'architex_breadcrumb_spacing', '160px' );
    wp_enqueue_style( 'architex-custom', ARCHITEX_THEME_CSS_DIR . 'architex-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style( 'architex-breadcrumb-top-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'architex_breadcrumb_spacing' );

// theme color control
function architex_custom_color() {
    $theme_color_1 = get_theme_mod( 'theme_color_1', '#3D6CE7' );
    $theme_color_2 = get_theme_mod( 'theme_color_2', '#258E46' );
    $theme_color_3 = get_theme_mod( 'theme_color_3', '#007A70' );

    wp_enqueue_style( 'architex-custom', ARCHITEX_THEME_CSS_DIR . 'architex-custom.css', [] );
    
    if ( !empty($theme_color_1)) {
        $custom_css = '';
        $custom_css .= "html:root{
            --tp-theme-1: " . $theme_color_1 . ";
            --tp-theme-2: " . $theme_color_2 . ";
            --tp-theme-3: " . $theme_color_3 . ";
        }";

        wp_add_inline_style( 'architex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'architex_custom_color' );

// architex_kses_intermediate
function architex_kses_intermediate( $string = '' ) {
    return wp_kses( $string, architex_get_allowed_html_tags( 'intermediate' ) );
}

function architex_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function architex_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}