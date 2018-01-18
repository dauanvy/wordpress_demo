<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div>
    <!-- /.container -->
    </div>

    
    
<div itemscope itemtype="http://schema.org/Organization">

    <div class="container-fluid footer-widget-area">

        <?php get_sidebar( 'footer' ); ?>
        
          <div class="container">
           <div class="footer-menu">
            <a href="<?php echo get_site_url(); ?>/terms-use-copyright-policy/">Terms of Use</a> | <a href="#">Customer Support</a> | <a href="#">Complaints</a> | <a href="<?php echo get_site_url(); ?>/ofcom-compliance/">Ofcom Compliance</a> | <a href="#">FAQ</a> | <a href="<?php echo get_site_url(); ?>/sitemap_index.xml">Sitemap &copy; <?php echo date("Y"); ?> Topland Communications Ltd.</a> | <a href="#">Privacy Policy</a> | <a href="<?php echo get_site_url(); ?>/terms-conditions">Terms &amp; Conditions</a>
        </div>
        </div>

    </div>

    </div>
    <div class="footer-image">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/pivotal-canvas-wp/images/footer-image.jpg" />
    </div>
</div>
    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
    </div>
    </body>

    </html>