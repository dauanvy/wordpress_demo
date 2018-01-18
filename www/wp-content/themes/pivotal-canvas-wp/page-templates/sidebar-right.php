<?php
/*
Template Name: Sidebar Right
*/
?><?php get_header(); ?>
</div>
       <div class="blog-post-title">
        <div class="container">
            <div class="col-sm-12">
            <h1>
                <?php the_title(); ?>
            </h1>
                </div>
        </div>
    </div>
<div class="container">
    <div class="col-sm-8 content">
          <?php get_template_part( 'loop', 'page' ); ?>
</div>

        <?php get_sidebar(); ?>
</div>
	<?php get_footer(); ?>