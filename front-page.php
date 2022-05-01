<?php
/**
 * Homepage Template
 * @package    WordPress
 * @subpackage themename
 */

get_header(); 
the_post(); 

$home = new Homepage($post->ID); ?>

<?php echo $home->getHomepageHero(); ?>

<?php 

    $introImage = null;
    
    $img      = get_field('intro_main_image', $home->homeID); 
    $headline = get_field('intro_headline_text', $home->homeID);
    $bodyCopy = get_field('intro_body_copy', $home->homeID);
?>
<div class="wrapper tiled intro">
    <div class="container centered">
        <div class="wrapper white introBlock">
            <div class="introMainImage">
                <div class="introMainImageInner">
                    <img src="<?php echo $img['sizes']['phone'] ?>" 
                         alt="<?php echo $img['alt'] ?>" 
                         title="<?php echo $img['title'] ?>" />
                </div>
            </div>
            <div class="introHeader">
                <h2><?php echo $headline; ?></h2>
            </div>
            <hr class="medium"/>
            <div class="introText">
                <p><?php echo $bodyCopy; ?></p>
            </div>
            <a href="/about" class="btn">Read More</a>
        </div>
    </div>  
</div>

<?php $featured = get_field('featured_post_object', $home->homeID);?>
<div class="wrapper sage featuredPost">
    <div class="container centered">
        <h4>Featured Post</h4>
        <div class="wrapper white featuredPostBox">
            <div class="container flexed">
                <div class="featuredPostImage">
                    <?php echo get_the_post_thumbnail($featured->ID, 'small'); ?>
                </div>
                <div class="featuredPostContent">
                    <h4><?php echo get_the_title($featured->ID); ?></h4>
                    <?php echo get_excerpt_by_id($featured->ID, 15);?>
                    <a href="<?php echo get_permalink($featured->ID)?>" class="btn btn-small">Read More</a>
                </div>
            </div>
        </div>
    </div>  
</div>

<div class="wrapper smoke getInContact">
    <div class="container centered">
       <div class="wrapper">
            <h3>Get In Touch</h3>

            <hr class="medium"/>
            <p><?php echo get_field('contact_text', $home->homeID); ?></p>
            <a href="/contact" class="btn btn-oregano">Reach Out</a>
        </div>
    </div>  
</div>

<?php get_footer(); ?>