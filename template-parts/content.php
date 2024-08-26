<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
        ?>
            <div class="entry-meta">
                <?php
                aero_posted_on();
                aero_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php aero_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_excerpt();
        ?>
    </div>

    <footer class="entry-footer">
        <a href="<?php echo esc_url(get_permalink()); ?>" class="button"><?php esc_html_e('Read More', 'aero-theme'); ?></a>
        <?php aero_entry_footer(); ?>
    </footer>
</article>