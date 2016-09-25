<?php
/*
================================================================================================
Beyond Expectations - header.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files
for a theme (the other footer.php). The header.php template file only displays the header section
of this theme. This also displays the navigation menu as well or any extra features.

@package        Beyond Expectations WordPress Theme
@copyright      Copyright (C) 2016. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (http://luminathemes.com/)
================================================================================================
*/
// Silence the server a bit
header_remove("X-Powered-By");
header("X-New-Header: test");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="http://gmpg.org/xfn/11" rel="profile" />
		<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<center><?php if( function_exists( 'adrotate_group' ) ) { echo adrotate_group(1); } ?></center>
	<div id="social-search" class="social-search">
		<nav class="align-center">
			<div class="social-navigation cf">
				<div class="search-toggle cf">
					<i class="fa fa-search cf"> </i>
					<a href ="#search-container" class="screen-reader-text cf"><?php _e('Search', 'beyond-expectations'); ?></a>
				</div>
				<!-- NGO-portal navigation icons -->
				<?php get_net_site_url( $net_url ); ?>
				<ul style=list-style-type: none;>
					<li class="top-navigation"><a href= <?php echo $net_url; ?>/foreningslista/>
						<i class="fa fa-external-link" aria-hidden="true" title="<?php _e('NGO-list','beyond-expectations-child-ngo');?>"></i>
						<span class="screen-reader-text"><?php _e("NGO-list", "beyond-expectations-child-ngo");?>:</span>
					</a></li>
					<li class="top-navigation"><a href=<?php bloginfo('url'); ?>/wp-admin/>
						<i class="fa fa-edit" aria-hidden="true" title="<?php _e("Login","beyond-expectations-child-ngo");?>"></i>
						<span class="screen-reader-text"><?php _e("Login", "beyond-expectations-child-ngo");?></span>
					</a></li>
				</ul>
				<!-- End navigation icons-->
				<?php beyond_expectations_social_navigation_setup(); ?>
			</div>
		</nav>
	</div>
	<div id="search-container" class="search-box-wrapper cf">
		<div class="search-box cf">
			<?php get_search_form(); ?>
		</div>
	</div>

	<header id="site-header" class="site-header" style="background: url(<?php header_image(); ?>);">
		<div id="site-branding" class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
			<h4 class="site-description"><?php bloginfo('description'); ?></h4>
		</div>
	</header>

	<nav id="site-navigation" class="primary-navigation">
		<button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'beyond-expectations'); ?></button>
		<?php
		wp_nav_menu(array(
			'theme_location'    => 'primary-navigation',
			'menu_id'           => 'primary-menu',
			'menu_class'        => 'nav-menu'
		));
		?>
	</nav>

	<section id="site-content" class="site-content cf">
