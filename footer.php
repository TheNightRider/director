</div>	<!-- End Main Area -->
	
		</div>
		<!--end container-->
	</div>
	
	<!--Footer Information-->
	<footer class="group">
				
		<p>&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. All Rights Reserved</p>
	</footer>
	<!-- End Footer Information -->
        
	<?php wp_footer(); ?>
        <?php print get_option('director_analytics'); ?>
        <?php 
        // social links
        $facebook = get_option('director_facebook');
        $twitter = get_option('director_twitter');
        $rss = get_option('director_rss');
        ?>
        <ul class="social">
            <?php if($facebook) : ?>
            <li><a href="<?php print $facebook; ?>"><img src="<?=IMAGES?>/facebook.png"</a></li>
            <?php endif; ?>
            <?php if($twitter) : ?>
            <li><a href="<?php print $twitter; ?>"><img src="<?=IMAGES?>/twitter.png"</a></li>
            <?php endif; ?>
            <?php if($rss) : ?>
            <li><a href="<?php bloginfo('rss'); ?>"><img src="<?=IMAGES?>/feed.png"</a></li>
            <?php endif; ?>
        </ul>
</body>
</html>