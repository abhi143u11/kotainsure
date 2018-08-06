<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<?php if (have_posts()) : ?>

    <?php if (is_home() && !is_front_page()) : ?>
        <!-- page title start -->
        <div class="page-title-area pt-120 pb-120" style="background-image:url(img/img100.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title text-center mb-20">
                            <?php    get_the_title(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- page title end -->
        <!-- blog start -->
        <div class="blog-area pt-115 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                        <?php endif; ?>

                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('content', get_post_format());

                        // End the loop.
                        endwhile;

                        // Previous/next page navigation.
                        the_posts_pagination(array(
                            'prev_text' => __('Previous page', 'kotainsure'),
                            'next_text' => __('Next page', 'kotainsure'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'kotainsure') . ' </span>',
                        ));

                    // If no content, include the "No posts found" template.
                    else :
                        get_template_part('content', 'none');

                    endif;
                    ?>
                </div> 
            </div> 
        </div> 
    </div>
    <?php get_footer(); ?>
