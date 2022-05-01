<?php
/**
 * @package WordPress
 * @subpackage themename
 */


if( have_posts() ){ // START THE LOOP. IF THERE ARE POSTS

while ( have_posts() ) : the_post();  // THEN LOOP THROUGH THEM 

if( is_search() ){
	$title = ucfirst( str_replace( '-', ' ', $post->post_type ) );
	$title = $title.': '.get_the_title( $post->ID ); 
} else {
	$title = get_the_title( $post->ID );
} ?>

	<article class="blogPost" role="article">
		<div class="postImage">
			<?php echo get_the_post_thumbnail($post->ID, 'small'); ?>
		</div>
		<div class="postContent">
			<header class="postHeader">
				<h1 class="postTitle" role="heading">
					<a href="<?php the_permalink(); ?>" title="Read more of <?php the_title(); ?>"><?php echo $title; ?></a>
				</h1>
			</header>

			<div class="postMeta">
				<?php printf( __( '<span class="sep">Posted on </span>
									<a href="%1$s" role="link"><time class="entry-date" datetime="%2$s">%3$s</time></a> 
									<span class="sep">', 'themename' ),
						get_permalink(),
						get_the_date( 'c' ),
						get_the_date()
				);?>
			</div>
			
			<div class="postEntry">
				<?php if($post->post_type === 'post'){ 
					echo get_excerpt_by_id($post->ID, 15); 
				} ?>
			</div>

			<div class="postReadMore">
				<a href="<?php echo get_permalink(); ?>" class="btn btn-secondary ">Read More</a>
			</div>
		</div>
	</article>

<?php 

endwhile; // END LOOP

}  ?>
