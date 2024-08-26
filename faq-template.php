<?php
/*
Template Name: FAQ Page
*/

get_header();
?>

<main id="primary" class="site-main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header>

        <div class="entry-content">
            <?php
            $faqs = new WP_Query(array(
                'post_type' => 'faq',
                'posts_per_page' => -1,
            ));

            if ($faqs->have_posts()) :
            ?>
                <div class="faq-list">
                <?php
                while ($faqs->have_posts()) : $faqs->the_post();
                ?>
                    <div class="faq-item card">
                        <h2 class="faq-question"><?php the_title(); ?></h2>
                        <div class="faq-answer">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
            <?php
            else :
                echo '<p>' . esc_html__('No FAQs found.', 'ios-inspired-theme') . '</p>';
            endif;
            ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>