<?php
/**
 * Template Name: Contact
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
         <div class="container-fluid">
             <div class="blog-post-title">
        <div class="container">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

          <?php get_template_part( 'loop', 'page' ); ?>
	<?php get_footer(); ?>