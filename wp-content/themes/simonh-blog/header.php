<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="header-outer row">
		<div class="container">
			<div role="navigation" class="header-inner site-wide clearfix">
				<section class="col-desk-12 col-tab-12 col-mob-12">
					<nav class="collapse navbar-collapse">
						<div class="mobile-menu-button">
							<span>&nbsp;</span>
							<span>&nbsp;</span>	
							<span>&nbsp;</span>
						</div>
						<div class="menu-meganav-container">
						<?php
							wp_nav_menu( array(
								'menu' => 'Main Nav'
							));
						?>
						</div>
						<a href="/" title="Simply Technical" class="logo">Simply Technical</a>
					</nav>
				</section>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
