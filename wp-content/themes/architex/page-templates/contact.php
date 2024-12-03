<?php 

/**
 * Template Name: Contact 
 * @package architex 
 */

get_header();

?>

<!-- Contact Section  -->
<div class="contact-page section-padding">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="contact-page google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3690.404245521138!2d91.80989606467384!3d22.338360085303748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdewanhat%20near%20Chattogram!5e0!3m2!1sen!2sbd!4v1677069314806!5m2!1sen!2sbd" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="contact-form">
                    <div class="section-title">
                        <h2>Lets talk...</h2>                            
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Your Name*</label>
                                <input type="text" placeholder="Your Full Name">
                            </div>
                            <div class="col-md-6">
                                <label>Email Address*</label>
                                <input type="email" placeholder="E-mail Address">
                            </div>
                            <div class="col-12">
                                <label>Subject*</label>
                                <input type="text" placeholder="Website">
                            </div>
                            <div class="col-12">
                                <label>Message*</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Here"></textarea>
                            </div>
                            <div><button type="submit" class="bordered-btn">Send Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Info -->
<div class="contact-info-wrap section-padding pt-0 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="single-contact-info">
                    <div class="contact-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/1.png" alt="">
                    </div>
                    <p>House #5, Street Number #98, brasilia-	70000-000, Brazil.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="single-contact-info">
                    <div class="contact-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/2.png" alt="">
                    </div>
                    <p>albert.design@gmail.com</p>
                    <p>albert.flores@gmail.com</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="single-contact-info">
                    <div class="contact-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/contact/3.png" alt="">
                    </div>
                    <p>+55 955 258 2699</p>
                    <p>+55 955 100 9449</p>
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


<?php 

get_footer();

