<section class="hero-outer row">
	<div class="container">
		<div class="hero-inner site-wide clearfix">
			<section class="col-desk-12 col-tab-12 col-mob-12">
				<?php  
				$hero_title = get_field('hero_title');
				$hero_subtitle = get_field('hero_subtitle');

				if($hero_title): ?>
					<h1><?php echo $hero_title; ?></h1>
				<?php endif; 

				if($hero_subtitle): ?>
					<h2><?php echo $hero_subtitle; ?></h2>
				<?php endif; ?>
			</section>
		</div>
	</div>
</section>