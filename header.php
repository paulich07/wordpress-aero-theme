<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aero-theme' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            if ( has_custom_logo() ) :
                the_custom_logo();
            else :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                $aero_description = get_bloginfo( 'description', 'display' );
                if ( $aero_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $aero_description; ?></p>
                <?php endif; ?>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'aero-theme' ); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->