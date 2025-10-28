<?php get_header(); ?>

<main class="front-page">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero-section'); ?>

    <!-- Features Section -->
    <?php get_template_part('template-parts/features-section'); ?>

    <!-- CTA Section -->
    <section class="cta" id="cta">
        <div class="container">
            <h2>Ready to take action?</h2>
            <a href="#" class="btn-primary">Sign Up Now</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
