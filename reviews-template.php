<?php
/*
Template Name: Reviews Page
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
            $reviews = new WP_Query(array(
                'post_type' => 'review',
                'posts_per_page' => -1,
            ));

            if ($reviews->have_posts()) :
                while ($reviews->have_posts()) : $reviews->the_post();
            ?>
                <div class="review card">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="review-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="review-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="review-meta">
                        <span class="review-date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('No reviews found.', 'ios-inspired-theme') . '</p>';
            endif;
            ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>