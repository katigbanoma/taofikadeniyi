    <footer>
        <div class="grid_12 omega clearfix">
            <div class="grid_4 footer-left">
                <?php if (dynamic_sidebar( 'footer_left' ) ): ?>
                
                <?php else:?>
                
                <h5>Twitter</h5>
                <p>Install the twitter plugin here!!</p>
                
                <?php endif;?>
                
            </div>
            <div class="grid_4 footer-middle">
                <?php if (dynamic_sidebar( 'footer_middle' ) ): ?>
                
                <?php else: ?>
                <h5>Site-map</h5>
                <p>list of sitemaps</p>
                <?php endif; ?>
            </div>
            <div class="grid_4 omega footer-right">
                <?php if (dynamic_sidebar( 'footer_right' ) ): ?>
                
                <?php else: ?>
                <h5>Skills</h5>
                <p>HTML</p>
                <p>PHP</p>
                <?php endif; ?>
                
            </div>
        </div>
            <div id="copyright">
                <p>&copy; Copyright <?php echo date('Y'); ?> <a href="<?php get_home_url() ?>">TaofikAdeniyi</a>. All Rights Reserved.</p>
                <div class="grid_12 ss-icon omega">
                        <a href="#">&#xF610;</a>
                        <a href="#">&#xF611;</a>
                        <a href="#">&#xF612;</a>
                        <a href="#">&#xF613;</a>
                        <a href="#">&#xF660;</a>
                        <a href="#">&#x2709;</a>
                </div>
            </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>