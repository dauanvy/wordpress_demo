<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */



	get_header(); ?>
    </div>
    <div class="container-fluid">
        <div class="blog-post-title">
            <div class="container">
                                <h1>Blog</h1>
                
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 content">
                <?php get_template_part( 'loop', 'index' ); ?>
            </div>

            <?php get_sidebar(); ?>
            

        </div>

        <div class="container-fluid above-footer">
            <div class="container">
               <div class="col-sm-6 above-footer-content">
                <h2>Learn more about our services
                </h2>
                <h3>Call 0843 178 0000 now</h3>
                <a href="/contact/"><button>Speak to one of our Experts</button></a>
</div>

            </div>

        </div>
        <?php get_footer(); ?>