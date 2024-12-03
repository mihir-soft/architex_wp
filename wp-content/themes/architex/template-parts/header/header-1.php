<?php 

	/**
	 * Template part for displaying Header Layout # 01
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package architex
	*/

	
    // contact button
	$architex_button_text = get_theme_mod( 'architex_button_text', __( 'Contact Us', 'architex' ) );
    $architex_button_link = get_theme_mod( 'architex_button_link', __( '#', 'architex' ) );    

    // header right
    $architex_header_right = get_theme_mod( 'architex_header_right', false );
    $architex_menu_col = $architex_header_right ? 'col-xl-7 col-lg-6 col-md-6 col-6' : 'col-xl-10 col-lg-10 col-md-6 col-6 text-end';

?>

<!-- Header Area  -->

<div id="header-sticky" class="header-area">        
        <div class="navigation">
            <div class="container">
                <div class="header-inner-box">
                     <?php architex_header_logo();?>

                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <?php architex_header_menu();?>
                        </nav>
                    </div>

                    <div class="header-btn">
                        <div class="menu-trigger">
                            <span class="lines"></span>
                            <span class="lines"></span>
                            <span class="lines"></span>
                        </div>
                    </div>

                    <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
                        <div class="mobile-nav-wrap">                    
                            <div id="hamburger">
                                <i class="las la-bars"></i>                                    
                            </div>
                            <!-- mobile menu - responsive menu  -->
                            <div class="mobile-nav">
                                <button type="button" class="close-nav">
                                    <i class="las la-times-circle"></i>
                                </button>
                                <nav class="sidebar-nav">
                                    <?php architex_mobile_menu(); ?>
                                </nav>  
                                <div class="action-bar">
                                    <a href="mailto:info@architex.com"><i class="las la-envelope"></i>info@architex.com</a>
                                    <a href="tel:123-456-7890"><i class="fal fa-phone"></i>123-456-7890</a>
                                    <a href="contact.html" class="theme-btn bordered-btn">Contact Us</a>
                                </div>      
                            </div>                            
                        </div>
                        <div class="overlay"></div>
                    </div>                        
                </div>
            </div>
        </div>        
    </div>

<?php get_template_part( 'template-parts/header/off-canvas-area' ); ?>

      

