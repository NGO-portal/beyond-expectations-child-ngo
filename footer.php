<?php
/*
================================================================================================
Beyond Expectations - footer.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other header.php). The footer.php template file only displays the footer
section of this theme.

@package        Beyond Expectations WordPress Theme
@copyright      Copyright (C) 2016. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (http://lumiathemes.com/)
================================================================================================
*/
// For sites, shows network + site copyright
// Get info about network
get_net_site_info($net_site_name, $net_site_desc);
?>
  </section>
  <footer id="site-footer" class="site-footer">
		<div id="site-info" class="site-info">
			<div class="info-title">
			&copy; <?php _e('Copyright', 'beyond-expectations-child-ngo')?> <?php echo date('Y'); ?> - <?php echo $net_site_name;?> &amp; <?php echo bloginfo('title') ?>
			</div>
			<?php if( function_exists( 'adrotate_group' ) ) { echo adrotate_group(5); } ?>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>