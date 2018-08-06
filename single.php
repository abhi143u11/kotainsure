<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<?php
// Start the loop.
while (have_posts()) : the_post();
    ?>
    <!-- blog start -->
    <div class="blog-area pt-115 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog-wrapper cleafix mb-60">
                        <div class="blog-thumb">
                            <?php echo the_post_thumbnail('full'); ?>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title"><h2><?php the_title(); ?></h2>
                            </div>
                            <div class="blog-d-meta">
                                <span>BY: <?php echo get_the_author_meta('display_name'); ?></span>
                                <span> <?php
                                    $post_date = get_the_date('j M, Y');
                                    echo $post_date;
                                    ?></span>
                                <span> <?php comments_number($zero, $one, $more); ?> <a href="#">COMMENTS</a></span>
                            </div>
    <?php the_content(); ?>
                        </div>
                        <div class="row mt-70">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="blog-post-tag">
                                    <?php
                                    $tags = get_the_tags($post->ID);
                                    if (is_array($tags)) {
                                        ?>
                                            <?php foreach ($tags as $tag) : ?><a  href="<?php bloginfo('url'); ?>/tag/<?php print_r($tag->slug); ?>">
            <?php print_r($tag->name); ?>
                                            </a>   

                                            <?php
                                        endforeach;
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="blog-share-icon text-left text-md-right">

                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b4fa9d0dc566e27"></script>               </div>
                            </div>
                        </div>
                    </div>



                </div>   </div></div></div>
    <?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>
