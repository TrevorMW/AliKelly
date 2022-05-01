<?php
/**
 * Template Name: Template - About
 * Description: Generic Sub Page Template
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); the_post(); ?>

<div class="container small">
  <section class="page" role="article">
    <header class="pageHeader">
      <h1 class="pageTitle" role="heading">
        <?php the_title(); ?>
      </h1>
    </header>
    <hr />

    <div class="pageContent">
      <?php the_content(); ?>
    </div>
  </section>
</div>

<?php get_sidebar(); get_footer(); ?>
