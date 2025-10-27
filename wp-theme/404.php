<?php
get_header(); 
?>

<main class="main-404">
    <h1>Oops! Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" style="color:#0073aa; text-decoration:underline;">Go back to homepage</a>
</main>

<?php
get_footer(); 
?>
