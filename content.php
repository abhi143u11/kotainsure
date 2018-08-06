<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
  

  
			
<!---------------------------------
------------BLOG POST--------------
----------------------------------->

                            <div class="col-xl-6">
                                <div class="blog-wrapper mb-60">
                                    <div class="blog-thumb">
                                        <a href="<?php echo get_permalink($post->ID); ?>">
                                        
                                           <?php echo the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
			    <div class="col-xl-6">
                                <div class="blog-wrapper mb-60">
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <span><?php echo get_the_time('d', $post->ID); ?>
                                                <br> <?php echo get_the_time('M', $post->ID); ?></span>
                                        
                                               <?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			endif;
		?>
                                          
                                        </div>
                                        <?php 
                                       the_content(); ?>
                                        <p></p>
                     <a href="<?php echo get_permalink($post->ID); ?>" class="more-link"> Read more <i class="icofont icofont-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                     
                        
