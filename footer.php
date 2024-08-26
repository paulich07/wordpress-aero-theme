<footer id="colophon" class="site-footer">
    <div class="footer-widgets">
        <?php dynamic_sidebar('footer-1'); ?>
    </div>
    <nav class="footer-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_id'        => 'footer-menu',
        ));
        ?>
    </nav>
    <div class="site-info">
        © <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>