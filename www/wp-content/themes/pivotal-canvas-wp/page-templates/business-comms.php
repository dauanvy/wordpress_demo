<?php
/**
 * Template Name: Business Comms Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */


	get_header(); ?>
    </div>
    <div class="container-fluid business-comms">
        <div class="blog-post-title">
            <div class="container">
                                <h1><?php the_title(); ?></h1>
                
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 content">
                <?php get_template_part( 'loop', 'page' ); ?>
            </div>

            <?php get_sidebar(); ?>
            

        </div>

        <div class="container-fluid above-footer">
            <div class="container">
               <div class="col-sm-6 above-footer-content">
                <h2>Learn more about
                    <?php the_title(); ?>
                </h2>
                <h3>Call 0843 178 0000 now</h3>
                <a href="/contact/"><button>Speak to one of our Experts</button></a>
</div>

            </div>

        </div>
        <?php get_footer(); ?>