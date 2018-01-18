<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php wp_title(); ?>
        </title>

        <?php wp_head();  ?>
    </head>

    <body <?php body_class(); ?>>
<div class="topbar container-fluid">
    <div class="container">
       <a href="/blog/">Blog</a> <a class="typeform-share button" href="https://karys1.typeform.com/to/jU2DNj" data-mode="drawer_left" data-hide-headers=true data-hide-footer=true target="_blank">Help Desk</a> <a href="#">Customer Login</a>
        
    </div>
    
</div>
        <div class="container header">
            <div class="col-sm-3 col-xs-12">
                <div class="logo">
                    <?php the_custom_logo();  ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 header-right">
                <?php if ( ! dynamic_sidebar( 'header-right' ) ) : ?>
                <?php endif; // end sidebar widget area ?>
                <nav class="site-navigation">
                    <?php // substitute the class "container-fluid" below if you want a wider content area ?>
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                    <div class="navbar navbar-default">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>

                                        </div>

                                        <?php
                                        wp_nav_menu( array(
                                            'menu'              => 'primary',
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                            'walker'            => new wp_bootstrap_navwalker())
                                        );
                                    ?>

                                    </div>
                                    <!-- .navbar -->
                            </div>
                        </div>
                    </div>
                    <!-- .container -->
                </nav>
                <!-- .site-navigation -->

            </div>
        </div>






        <?php echo do_shortcode('[metaslider id=105 percentwidth=100 restrict_to=home]');    ?>

        <div class="container">