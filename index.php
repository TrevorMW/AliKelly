<?php
/**
 * @package WordPress
 * @subpackage themename
 */

$blog_id = get_option('page_for_posts'); 

get_header(); ?>

<div class="blogPostsTools">
  <div class="container ">
    <div class="container flexed">
      <header class="pageHeader">
        <h1 class="pageTitle" role="heading">
          Blog
        </h1>
      </header>
      <?php dynamic_sidebar('blog');?>
    </div>
    <hr />
  </div> 
</div>

<div class="container flexed">
  <div class="primary" role="structure">
    <section class="page posts-page">
      <div class="page-content">
        <?php $post = get_post( $blog_id ); $post->post_content; ?>
        <div class="blogPostGrid"><?php get_template_part( 'loop', 'index' ); ?></div>
      </div>
    </section>
  </div>
</div>
<?php if (  $wp_query->max_num_pages > 1 ) :?>
  <div class="wrapper pagination paginationBlog">
    <div class="container ">
    <hr />
      <?php echo build_pagination($wp_query, $paged); ?>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
