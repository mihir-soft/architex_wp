<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package architex
 */

if ( is_single() ) : ?>

    <article id="post-<?php the_ID();?>"<?php post_class( 'postbox__item format-image mb-50' );?>>
    <?php if ( has_post_thumbnail() ): ?>
            <div class="postbox__thumb">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </div>
    <?php endif;?>
    <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
    <div class="blog-content-wrap mt-20">
        <?php the_content(); ?>
    </div>
    
    <div class="blog-tag-wrap mt-20">
        <?php print architex_get_tag(); ?>
    </div>
        

    </article>

<?php else: ?>
    

<article id="post-<?php the_ID();?>" <?php post_class( 'single-blog-item format-standard' );?>>
        <?php if ( has_post_thumbnail() ): ?>    
        <div class="blog-thumb">            
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
            </a>
        </div>
        <?php endif; ?>

        <div class="blog-content-wrap">
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            <div class="blog-title">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            </div>                        
        </div>
        <?php the_excerpt();?>        
        <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
</article>

<?php endif;?>