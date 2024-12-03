<?php 

/**
 * Template Name: Portfolio - Gallery
 * @package architex 
 */

get_header();

?>

<div id="port-masonry" class="portfolio-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-list">
                    <a href="portfolio-details.html" class="single-portfolio-item large design building construction">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/1.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Construction</span>
                            <h5>Micalu Meseum</h5>
                        </div>
                    </a>
                    <a href="portfolio-details.html" class="single-portfolio-item small interior">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/2.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Interior</span>
                            <h5>Hall Room</h5>
                        </div>
                    </a>
                    <a href="portfolio-details.html" class="single-portfolio-item medium interior ">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/3.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Interior</span>
                            <h5>Drawing Room</h5>
                        </div>
                    </a>
                    <a href="portfolio-details.html" class="single-portfolio-item medium construction building">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/4.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Construction</span>
                            <h5>National Perliament</h5>
                        </div>
                    </a>
                    <a href="portfolio-details.html" class="single-portfolio-item medium interior building">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/5.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Architecture</span>
                            <h5>Pentagone House</h5>
                        </div>
                    </a>
                    <a href="portfolio-details.html" class="single-portfolio-item building">
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/portfolio/6.jpg" alt="">
                        <div class="portfolio-details">
                            <span>Interior</span>
                            <h5>Kitchen Cabinet</h5>
                        </div>
                    </a>                                       
                </div>
            </div>
        </div>        
    </div>
</div>

<?php 

get_footer();

