<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>


<div class="blogPostsTools">
  <div class="container ">
    <div class="container flexed">
      <header class="pageHeader searchPageHeader">
        <h1 class="pageTitle" role="heading">
          <?php printf( __( 'Search Results for: %s', 'themename' ), '<span>"' . get_search_query() . '"</span>' ); ?>
        </h1>
      </header>
      <?php dynamic_sidebar('blog');?>
    </div>
    <hr />
  </div> 
</div>

<div class="container flexed">
  <div class="primary" role="structure">
    
    <?php if ( have_posts() ) : ?>

      <div class="blogPostGrid">
        <?php get_template_part( 'loop', 'search' ); ?>
      </div>

    <?php else : ?>

      <div class="noPosts">
        <p>
          <?php _e( 'Sorry, but nothing matched your search criteria. Please try again .', 'themename' ); ?>
        </p>
      </div>

    <?php endif; ?>
  </div>
</div>
<?php if ( $wp_query->max_num_pages > 1 ) :?>
  <div class="wrapper pagination paginationBlog">
    <div class="container ">
    <hr />
      <?php echo build_pagination($wp_query, $paged); ?>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
