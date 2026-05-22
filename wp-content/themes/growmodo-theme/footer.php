<footer id="colophon" class="site-footer">
    <!-- Container Principal (Widgets) -->
    <div class="footer-widgets">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col col-30"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                <div class="footer-col col-15"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                <div class="footer-col col-15"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                <div class="footer-col col-15"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                <div class="footer-col col-15"><?php dynamic_sidebar( 'footer-5' ); ?></div>
                <div class="footer-col col-10"><?php dynamic_sidebar( 'footer-6' ); ?></div>
            </div>
        </div>
    </div>

<!-- Container Bottom (Copyright e Termos) -->
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-flex">
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer-terms">
                <a href="#"><?php _e( 'Terms & Conditions', 'growmodo-theme' ); ?></a>
            </div>
            <div class="footer-copy">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All rights reserved.', 'growmodo-theme' ); ?></p>
            </div>
        </div>
    </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
