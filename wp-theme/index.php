<?php
get_header(); ?>

<main>
  <h1>Hello, Theme!</h1>
  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
          </article>
      <?php endwhile; ?>
  <?php else : ?>
      <p>No posts found</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
