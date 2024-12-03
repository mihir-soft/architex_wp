<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package architex
 */

$architex_blog_btn = get_theme_mod( 'architex_blog_btn', 'Read More' );
$architex_blog_btn_switch = get_theme_mod( 'architex_blog_btn_switch', true );

?>

<?php if ( !empty( $architex_blog_btn_switch ) ): ?>
<div class="read_more_link">
    <a href="<?php the_permalink();?>" class="theme-btn mt-15"><?php print esc_html( $architex_blog_btn );?></a>
</div>
<?php endif;?>