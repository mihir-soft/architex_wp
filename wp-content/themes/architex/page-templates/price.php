<?php 

/**
 * Template Name: Price
 * @package architex 
 */

get_header();

?>

<div class="pricing-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h6>Pricing</h6>
                    <h2>Choose Your Package</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-price-item wow fadeInLeft" data-wow-delay=".3s">
                    <h5>Standard</h5>
                    <div class="price-box">
                        <h3>$75 / <span>Sq Feet</span></h3>
                        <p>Perfect for Residential Interior Design</p>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li>Interior Design</li>
                            <li>Floor Planning</li>
                            <li>Home Decoration</li>
                            <li>Free Drawing</li>
                        </ul>
                    </div>
                    <div class="bordered-btn">Choose Plan</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-item active wow fadeInUp" data-wow-delay=".4s">
                    <h5>Advance</h5>
                    <div class="price-box">
                        <h3>$150 / <span>Sq Feet</span></h3>
                        <p>Perfect for Residential Interior Design</p>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li>Interior Design</li>
                            <li>Floor Planning</li>
                            <li>Home Decoration</li>
                            <li>Free Drawing</li>
                        </ul>
                    </div>
                    <div class="bordered-btn">Choose Plan</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-item wow fadeInRight" data-wow-delay=".5s">
                    <h5>Premium</h5>
                    <div class="price-box">
                        <h3>$300 / <span>Sq Feet</span></h3>
                        <p>Perfect for Residential Interior Design</p>
                    </div>
                    <div class="price-list">
                        <ul>
                            <li>Interior Design</li>
                            <li>Floor Planning</li>
                            <li>Home Decoration</li>
                            <li>Free Drawing</li>
                        </ul>
                    </div>
                    <div class="bordered-btn">Choose Plan</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA Area  -->

<div class="cta-area d-flex align-items-center bg-cover" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/cta-bg.jpg">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 text-center">
                <div class="section-title">                    
                    <h2 class="text-white">Let's start your new <br> dream project</h2>
                </div>
                <a href="contact.html" class="theme-btn">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!-- Client Section  -->

<div class="client-area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="client-wrap owl-carousel">
                    <div class="single-client">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/client/1.png" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/client/2.png" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/client/3.png" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/client/4.png" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/client/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 

get_footer();

