<?php 

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package architex
   */

    $architex_side_hide = get_theme_mod( 'architex_side_hide', false );
    $architex_side_search = get_theme_mod( 'architex_side_search', false );
    $architex_search = get_theme_mod( 'architex_search', false );
    $architex_side_logo = get_theme_mod( 'architex_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png' );
    $architex_extra_about_text = get_theme_mod( 'architex_extra_about_text', __( 'We must explain to you how all seds this mistakens idea off denouncing', 'architex' ) );

    $architex_extra_map = get_theme_mod( 'architex_extra_map', __( '#', 'architex' ) );
    $architex_contact_title = get_theme_mod( 'architex_contact_title', __( 'Contact Info', 'architex' ) );
    $architex_extra_address = get_theme_mod( 'architex_extra_address', __( '12/A, Fanta City Tower, NYC', 'architex' ) );
    $architex_extra_phone = get_theme_mod( 'architex_extra_phone', __( '088889797697', 'architex' ) );
    $architex_extra_email = get_theme_mod( 'architex_extra_email', __( 'support@mail.com ', 'architex' ) );
?>

<!-- Off-canvas Area-->

<div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="las la-times"></i>
            </button>
        </div>
        <?php if(!empty($architex_side_logo)): ?>
        <div class="logo-side mb-30">
            <div class="logo">
                <a href="<?php print esc_url( home_url( '/' ) );?>" class="logo"><img src="<?php echo esc_url($architex_side_logo);?>" alt="<?php echo esc_attr__('logo','architex') ?>"></a>
            </div>
        </div>
        <?php endif; ?>

        <div class="side-info">
            <div class="contact-list mb-40">                
                <p><?php echo esc_html($architex_extra_about_text);?></p>
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/offcanvas-img.jpg" alt="">

                <div class="mt-30 mb-30">
                    <a href="contact.html" class="bordered-btn">Get In Touch</a>
                </div>
            </div>
            <div class="social-area-wrap">
                  <?php architex_header_social_profiles();?>
            </div>
        </div>
    </div>

    <div class="offcanvas-overly"></div>


<!-- sidebar area start -->
<div class="sidebar__area d-none">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">
               <?php if(!empty($architex_side_logo)): ?>
               <div class="sidebar__logo mb-40">
                  <a href="<?php print esc_url( home_url( '/' ) );?>">
                     <img src="<?php echo esc_url($architex_side_logo); ?>" alt="<?php echo esc_attr__('logo','architex') ?>">
                  </a>
               </div>
               <?php endif; ?>

               <?php if(!empty($architex_side_search)): ?>
               <div class="sidebar__search mb-25">
                  <form method="get" action="<?php print esc_url( home_url( '/' ) );?>">
                     <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Where are your searching for you?', 'architex' );?>">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <?php endif; ?>

               <div class="mobile-menu fix"></div>
               
               <?php if(!empty($architex_side_hide)): ?>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4><?php echo esc_html($architex_contact_title); ?></h4>
                  <ul>
                     <?php if(!empty($architex_extra_map)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="<?php echo esc_url($architex_extra_map);?>"><?php echo esc_html($architex_extra_address)?></a>
                        </div>
                     </li>
                     <?php endif; ?>

                     <?php if(!empty($architex_extra_phone)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:<?php echo esc_attr($architex_extra_phone); ?>"><?php echo esc_html($architex_extra_phone); ?></a>
                        </div>
                     </li>
                     <?php endif; ?>

                     <?php if(!empty($architex_extra_email)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="<?php echo esc_attr($architex_extra_email);?>"><?php echo esc_html($architex_extra_email);?></a>
                        </div>
                     </li>
                     <?php endif; ?>

                  </ul>
               </div>               

               <div class="sidebar__social">
                  <?php architex_header_social_profiles();?>
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->     
      <div class="body-overlay"></div>
      <!-- sidebar area end --> 

