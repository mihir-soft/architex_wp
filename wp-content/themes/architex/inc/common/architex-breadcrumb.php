<?php
/**
 * Breadcrumbs for Architex theme.
 *
 * @package     Architex
 * @author      IIDEA_Informatics 
 * @copyright   Copyright (c) 2024
 * @link        https://iidea-informatics/architex
 * @since       architex 1.0.0
 */


function architex_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;


    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','architex'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','architex'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }

    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'architex' ) );
    }       
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'architex' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'architex' );
    }     
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    }      
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
    if( !empty($_GET['s']) ) {
      $is_breadcrumb = null;
    }

      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        
        // Breadcrumb Customizer  

        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );        
        $breadcrumb_info_switch = get_theme_mod( 'breadcrumb_info_switch', true );
        $breadcrumb_switch = get_theme_mod( 'breadcrumb_switch', true );
        

        if ( $hide_bg_img && empty($_GET['s']) ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }?>

        <?php if(!empty($breadcrumb_switch)) : ?>
        <div class="breadcrumb-area" data-background="<?php print esc_attr($bg_img);?>">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <?php if (!empty($breadcrumb_info_switch)) : ?>
                    <div class="col-lg-12">                         
                        <div class="breadcrumb-title">
                            <h1><?php echo wp_kses_post( $title ); ?></h1>                        
                        </div>
                        <div class="breadcrumb__list">
                           <?php if(function_exists('bcn_display')) {
	                           bcn_display();
	                        } ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php
      }
}

add_action( 'architex_before_main_content', 'architex_breadcrumb_func' );

// architex_search_form
function architex_search_form() {
    ?>
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
               <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'architex' );?>" >
                     <button>
                        <i class="fa fa-search"></i>
                     </button>
               </form>
            </div>
         </div>
    </div>
   <?php
}

add_action( 'architex_before_main_content', 'architex_search_form' );