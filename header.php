<?php
	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <head> section and everything up till <main id="main">
	 *
	 * @package Make: Community
	 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="http://1.gravatar.com/blavatar/dab43acfe30c0e28a023bb3b7a700440?s=14">
		<script type="text/javascript" src="http://use.typekit.com/fzm8sgx.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!--<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-51157-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>-->

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="container">
			<div class="row">
				<div id="div-gpt-ad-664089004995786621-1" class="text-center">
					<script type='text/javascript'>
						googletag.cmd.push(function(){googletag.display('div-gpt-ad-664089004995786621-1')});
					</script>
				</div>
			</div>
		</div>
		<header class="top-navigation-wrapper">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="logo col-md-2">
							<a href="<?php echo get_makezine_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/make-logo.png" /></a>
						</div>
						<nav role="navigation" class="col-md-10 site-navigation primary-navigation">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'make-primary', 
									'container'      => false, 
									'menu_class'     => 'nav menu-primary-nav ga-nav clearfix',
								) );
							?>
						</nav>
						<div class="additional-content">
							<div class="subscribe dropdown clearfix">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Subscribe</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo get_makezine_home_url(); ?>/subscribe">Magazine</a></li>
									<li><a href="<?php echo get_makezine_home_url(); ?>/newsletter">Newsletter</a></li>
									<li><a href="<?php echo get_makezine_home_url(); ?>/feeds">RSS</a></li>
								</ul>
							</div>
							<form action="<?php echo get_makezine_home_url(); ?>/search/" class="search-make">
								<input type="text" class="search-field" name="q" placeholder="" />
								<input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-btn.png" alt="Search" class="disabled" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="secondary-header">
				<div class="container">
					<div class="row">
						<nav class="col-md-12 site-navigation secondary-navigation">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'make-secondary',
									'container'		 => false,
									'menu_class' 	 => 'nav menu-secondary-nav ga-nav clearfix',
								) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
