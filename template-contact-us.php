<?php
/**
 * Template Name: Template - Contact Us
 * Description: Generic Sub Page Template
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); the_post(); ?>

<div class="container small">
  <section class="page" role="article">
    <header class="page-header">
      <h1 class="page-title" role="heading">
        <?php the_title(); ?>
      </h1>
    </header>
    <div class="page-content contact-us-form">
      <?php the_content(); ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
