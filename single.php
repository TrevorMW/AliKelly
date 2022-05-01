<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header();  the_post(); ?>

<div class="container">
    <article class="entry" role="article">
      <header class="entryHeader">
        <h1 class="entryTitle" role="heading">
          <?php the_title(); ?>
        </h1>
        <div class="entryMeta">
            <?php printf( __( '<span class="meta-prep meta-prep-author">Posted on </span>
                              <a href="%1$s" rel="bookmark">
                                <time class="entry-date" datetime="%2$s" pubdate>%3$s</time>
                              </a> ', 'themename' ),
                              get_permalink(),
                              get_the_date( 'c' ),
                              get_the_date()
            ); ?>	
        </div>
      </header>

      <hr />

      <div class="entryContent">
        <?php the_content(); ?>
      </div>

    </article>
    <hr />
    <nav class="pagination paginationSinglePost" role="navigation">
      <?php previous_post_link( '<div><div class="navPrev">%link</div></div>',  _x( '&larr;', 'Previous post link', 'themename' ) . ' %title' ); ?>
      <?php next_post_link( '<div><div class="navNext">%link</div></div>', '%title ' . _x( '&rarr;', 'Next post link', 'themename' ) ); ?>
    </nav>
</div>

<?php get_footer(); ?>
