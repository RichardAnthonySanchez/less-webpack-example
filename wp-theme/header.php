<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <?php get_template_part('template-parts/nav'); ?>
        <?php get_template_part('template-parts/mobile-menu'); ?>

    </div>
</header>
