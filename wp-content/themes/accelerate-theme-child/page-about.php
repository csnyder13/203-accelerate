<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays the about page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page-hero-content">
        <div class="about-page">
            <div class="about-head">
                <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making out clients visible and making their customers smile.</h3>
            </div>
        </div>

        <div class="about-content">
            <h5>Our Services</h5>
            <p>We take pride in our clients and the content we create for them.<br> Here's a brief overview of our offered services.</p>
        </div>    
   
        <?php query_posts('post_type=services&orderby=ID&order=ASC'); ?>
            <?php while ( have_posts() ) : the_post();
                $service = get_field('service');
                $image = get_field('image');
                $size = "full"; ?>
            
                <article class="services clearfix">
                    <figure class="third-width">
                        <?php echo  wp_get_attachment_image( $image, $size ); ?>
                    </figure>
                    <aside class="service-description">        
                        <h3><?php echo $service; ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </aside>
                </article>

            <?php endwhile; // end of the loop. ?>

            <div class="about-contact clearfix">
                <section>
                    <div class="call-to-action">
                        <h3>Interested in working with us?</h3>
                        <input type="button" value="Contact Us">
                    </div>
                </section>
        </div>
    </div><!-- #primary -->



<?php get_footer(); ?>
