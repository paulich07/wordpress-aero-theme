<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<main id="primary" class="site-main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>

            <form id="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                <div class="form-group">
                    <label for="full-name"><?php esc_html_e('Full Name', 'ios-inspired-theme'); ?></label>
                    <input type="text" id="full-name" name="full_name" required>
                </div>

                <div class="form-group">
                    <label for="email"><?php esc_html_e('Email', 'ios-inspired-theme'); ?></label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message"><?php esc_html_e('Message', 'ios-inspired-theme'); ?></label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="button"><?php esc_html_e('Send Message', 'ios-inspired-theme'); ?></button>

                <input type="hidden" name="action" value="submit_contact_form">
                <?php wp_nonce_field('contact_form_submit', 'contact_form_nonce'); ?>
            </form>
        </div>
    </article>
</main>

<?php get_footer(); ?>