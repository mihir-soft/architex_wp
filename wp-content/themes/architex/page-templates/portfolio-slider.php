<?php 

/**
 * Template Name: Portfolio - Slider
 * @package architex 
 */

get_header();

?>

<div class="portfolio-section section-padding">
    <div class="container">
        <div class="row">
            <div class="portfolio-slider owl-carousel">
                <div class="single-portfolio-wrapper">
                    <div class="portfolio-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/1.jpg" alt="">
                    </div>
                    <div class="portfolio-title">
                        <h3>Artistic</h3>
                        <h6>Business</h6>
                    </div>
                </div>
                        
                <div class="single-portfolio-wrapper">
                    <div class="portfolio-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/2.jpg" alt="">
                    </div>
                    <div class="portfolio-title">
                        <h3>Nemesis</h3>
                        <h6>Business</h6>
                    </div>
                </div>
                        
                <div class="single-portfolio-wrapper">
                    <div class="portfolio-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/3.jpg" alt="">
                    </div>
                    <div class="portfolio-title">
                        <h3>Warfaze</h3>
                        <h6>Business</h6>
                    </div>
                </div>
                        
                <div class="single-portfolio-wrapper">
                    <div class="portfolio-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/4.jpg" alt="">
                    </div>
                    <div class="portfolio-title">
                        <h3>Renessa</h3>
                        <h6>Business</h6>
                    </div>
                </div>
                
                <div class="single-portfolio-wrapper">
                    <div class="portfolio-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/5.jpg" alt="">
                    </div>
                    <div class="portfolio-title">
                        <h3>Camelia</h3>
                        <h6>Business</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<?php 

get_footer();

