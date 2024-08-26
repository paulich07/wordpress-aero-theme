<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Oops! That page can't be found.', 'ios-inspired-theme'); ?></h1>
        </header>

        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'ios-inspired-theme'); ?></p>

            <?php get_search_form(); ?>

            <div class="error-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/404.svg" alt="404 Error" width="300" height="300">
            </div>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="button"><?php esc_html_e('Back to Home', 'ios-inspired-theme'); ?></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>