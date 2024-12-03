<?php 

	/**
	 * Template part for displaying Header Layout # 02
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package architex
	*/

	// info
    
    $architex_phone_num = get_theme_mod( 'architex_phone_num', __( '786 686 350 36', 'architex' ) );
    $architex_mail_id = get_theme_mod( 'architex_mail_id', __( 'info@arnav.com', 'architex' ) );
    $architex_address = get_theme_mod( 'architex_address', __( '3567 Melbourn, EA 265, Australia', 'architex' ) );    

    // contact button
	$architex_button_text = get_theme_mod( 'architex_button_text', __( 'Contact Us', 'architex' ) );
    $architex_button_link = get_theme_mod( 'architex_button_link', __( '#', 'architex' ) );    

    // header right
    $architex_header_right = get_theme_mod( 'architex_header_right', false );
    $architex_menu_col = $architex_header_right ? 'col-xl-7 col-lg-6 col-md-6 col-6' : 'col-xl-10 col-lg-10 col-md-6 col-6 text-end';

?>

<!-- Header Top Area -->
<div class="header-top-bar dark-bg">
    <div class="container">
      <div class="row">        
        <div class="col-xl-6 col-lg-6">
          <div class="contact-info"><i class="las la-envelope"></i> <span><?php echo esc_html($architex_mail_id);?></span> <i class="las la-map-marker"></i>
            <span><?php echo esc_html($architex_address);?></span> </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-lg-end">
            <div class="language-dropdown">                        
                <select name="language">
                    <option value="default">US.English</option>
                    <option value="default">UK.English</option>
                    <option value="default">French</option>
                    <option value="default">Italian</option>
                </select>
            </div>
            <div class="site-info">                
                <div class="social-area">
                    <?php architex_header_social_profiles();?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<!-- Header Area  -->

<div id="header-sticky" class="header-area">        
        <div class="navigation">
            <div class="container">
                <div class="header-inner-box">
                     <?php architex_header_logo();?>

                    <div class="main-menu d-none d-lg-block">
                        <?php architex_header_menu();?>
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



<!-- header-area-start -->
<header id="header-sticky" class="header-area d-none">
         <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                     <div class="logo-area">
                           <div class="logo">
                              <?php architex_header_logo();?>
                           </div>
                     </div>
                  </div>
                  <div class="<?php echo esc_attr($architex_menu_col); ?>">
                     <div class="menu-area menu-padding">
                           <div class="main-menu">
                              <nav id="mobile-menu">
                                 <?php architex_header_menu();?>
                              </nav>                              
                           </div>
                     </div>
                     <div class="side-menu-icon d-lg-none text-end">
                        <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
                     </div>
                  </div>
                  <?php if(!empty($architex_header_right)) : ?>
                  <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                     <div class="header-info f-right">
                        <?php if(!empty($architex_phone_num)) : ?>
                           <div class="info-item info-item-right">
                              <span><?php echo esc_html__('Phone Number','architex'); ?></span>
                              <h5><a href="tel:<?php echo esc_attr($architex_phone_num); ?>"><?php echo esc_html($architex_phone_num); ?></a></h5>
                           </div>
                           <?php endif; ?>
                           <?php if(!empty($architex_mail_id)) : ?>
                           <div class="info-item">                              
                              <span><?php echo esc_html__('Free Consultancy','architex'); ?></span>
                              <h5><a href="<?php echo esc_attr($architex_mail_id); ?>"><?php echo esc_html($architex_mail_id);?></a></h5>
                           </div>
                           <?php endif; ?>
                     </div>
                  </div>
                  <?php endif; ?>

               </div>
         </div>
      </header>
      <!-- header-area-end -->


      <?php get_template_part( 'template-parts/header/off-canvas-area' ); ?>

      

