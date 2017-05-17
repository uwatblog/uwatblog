<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php include 'modules/shared/home-hero.php'; ?>
			<?php include 'modules/shared/intro-text.php'; ?>
			<?php include 'modules/shared/three-post-listing.php'; ?>

		</main>
	</div>

<?php get_footer(); ?>
