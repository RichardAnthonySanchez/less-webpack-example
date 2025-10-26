<?php get_header(); ?>

<main>
  <h1>Hello from the index.php!</h1>
  <nav>
    <button><i class="fa-solid fa-bars"></i></button>
    <button><i class="fa-solid fa-xmark"></i></button>
</nav>

<section class="socials">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
</section>

<section class="domain-icons">
    <i class="fa-solid fa-sailboat"></i>
    <i class="fa-solid fa-handshake"></i>
    <i class="fa-solid fa-money-bill-transfer"></i>
    <i class="fa-solid fa-arrows-rotate"></i>
</section>

  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    endif;
  ?>
</main>

<?php get_footer(); ?>
