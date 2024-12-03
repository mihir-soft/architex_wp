<?php 

/**
 * Template Name: Home 01
 * @package architex 
 */

get_header();

?>


    <!-- Hero Area  -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center hero-area-inner">
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="hero-area-content">
                        <div class="section-title">
                            <h6>Building for the best</h6>
                            <h1>Create an effective interior design planning for your architectural <br> dream venture.</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <a href="about.html">
                        <div class="circle-button in-bord">
                            <div class="rotate-circle fz-30 text-u">
                                <svg class="textcircle" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                        </path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle" textLength="900">Explore More
                                            -
                                            Explore More -</textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="homepage-slides owl-carousel">
            <div class="single-slide-item">

                <div class="slider-bg bg-cover" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/slider/slide-1.jpg">
                </div>

            </div>

            <div class="single-slide-item">
                <div class="slider-bg bg-cover" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/slider/slide-2.jpg">
                </div>
            </div>
        </div>        

    </div>

    <!-- Service Section  -->
    <div class="service-section gray-bg section-padding pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 text-center">
                    <div class="section-title">
                        <h2>Great Experience for <br> Architecture Solutions </h2>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/icon/flat.png" alt="">
                        </div>
                        <h5>Structural Design</h5>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/icon/architecture.png" alt="">
                        </div>
                        <h5>Floor Planning</h5>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/icon/sketch.png" alt="">
                        </div>
                        <h5>Sketch Drawing</h5>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/icon/floor-plan.png" alt="">
                        </div>
                        <h5>Interior & Exterior</h5>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section  -->
    <div class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h2>We Are Full Service Architecture Studio</h2>
                        </div>
                        <p>Nulla gravida dignissim magna, lacinia suscipit diam. Ut ut viverra velit. Aenean et felis arcu. Aliquam vitae justo erat. Integer sed lacus in tellus finibus gravida. Integer scelerisque pretium mauris nec consequat. Sed condimentum pellentesque lorem. Phasellus imperdiet mi ultrices, tristique est vitae</p>
                        <a href="about.html" class="theme-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="about-bg-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/about/about-bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Line -->
    <div class="feature_wrap">
        <div class="feature_item" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/feature-bg.jpg">
            <h5>Construction Project</h5>
            <h5>Interior Design</h5>
            <h5>Concept Drawings</h5>
            <h5>Building Venture</h5>
        </div>
    </div>

    <!-- Project Section -->

    <div class="project-section section-padding pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title">
                        <h2>Delivering our clients more
                            project clarity, greater insight,
                            and less chaos.</h2>
                    </div>
                </div>
            </div>
            <div class="project-slider owl-carousel">
                <div class="row mt-60">
                    <div class="col-xl-8 col-lg-7 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                        <a href="portfolio-details.html" class="single-project-wrapper" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/project/1.jpg">
                            <div class="project-info-inner">
                                <h3>Fastin Meseum</h3>
                                <h6>Location: <span>2R Edward Ave</span></h6>                    
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                        <a href="portfolio-details.html" class="single-project-wrapper" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/project/2.jpg">
                            <div class="project-info-inner">
                                <h3>Station Home</h3>
                                <h6>Location: <span>2R Edward Ave</span></h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-xl-8 col-lg-7 col-md-6 wow fadeInLeft animated" data-wow-delay="200ms">
                        <a href="portfolio-details.html" class="single-project-wrapper" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/project/3.jpg">
                            <div class="project-info-inner">
                                <h3>Fastin Meseum</h3>
                                <h6>Location: <span>2R Edward Ave</span></h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 wow fadeInLeft animated" data-wow-delay="400ms">
                        <a href="portfolio-details.html" class="single-project-wrapper" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/project/4.jpg">
                            <div class="project-info-inner">
                                <h3>Station Home</h3>
                                <h6>Location: <span>2R Edward Ave</span></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-btn">
            <a href="portfolio-standard.html">View All Projects<i class="las la-arrow-right"></i></a>
        </div>
    </div>

    <!-- Counter Section -->

    <div class="counter-section section-padding pt-0 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span>1037</span></p>
                        <h6>Project Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span>156</span></p>
                        <h6>Qualified Architect</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span>750</span>+</p>
                        <h6>Work Facilities</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number"><span>30</span>+</p>
                        <h6>Worldwide Branches</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section  -->
    <div class="testimonial-section dark-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="testimonial-wrapper owl-carousel">
                        <div class="single-testimonial-item">
                            <div class="quote-icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/straight-quotes.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="text-white">Laudem aperiri oportere nec ad, vel et ceteros nominati et nula disputationi sed ea lorem vis prompta vis, ad mutat luptatum euripidis. </p>
                            </div>
                            <div class="testimonial-author">
                                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/testimonials-img-2.png" alt="">
                                <h6>Ryans Gigs <span>Constraction Manager</span></h6>
                            </div>

                        </div>
                        <div class="single-testimonial-item">
                            <div class="quote-icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/straight-quotes.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p class="text-white">Laudem aperiri oportere nec ad, vel et ceteros nominati et nula disputationi sed ea lorem vis prompta vis, ad mutat luptatum euripidis. </p>
                            </div>
                            <div class="testimonial-author">
                                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/testimonials-img-2.png" alt="">
                                <h6>Paul Scholes <span>Site Engineer</span></h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section  -->

    <div class="contact-section">
        <div class="contact-bg bg-cover" data-background="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact-bg.jpg">
        </div>
        <div class="contact-form-wrap gray-bg">
            <div class="section-title">
                <h6>Our Business Thrives</h6>
                <h3>Don't hesitate to contact us for addtional info</h3>
            </div>
            <div class="contact-form">
                <form>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>





<?php 

get_footer();

