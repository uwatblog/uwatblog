<?php 
	$the_query = new WP_Query( array(
		//'category_name' => 'news',
		'posts_per_page' => 3,
	)); 

	if ( $the_query->have_posts() ) :
?>

<section class="three-post-listing row">
	<div class="container">
		<div class="site-wide clearfix">
			<header class="col-desk-12 col-tab-12 col-mob-12"><a href="/blog" title="Latest Posts">Latest Posts</a></header>
		</div>
		<div class="three-post-listing-inner site-wide clearfix">

			<?php 
				while ( $the_query->have_posts() ) : $the_query->the_post();
					$post_ID = get_the_ID();
					$post_title = get_the_title();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_ID ), 'full' ); 
					$post_permalink = get_permalink( $post_ID );
					$post_snippet = get_field('snippet');
			?>
			<article class="col-desk-4 col-tab-6 col-mob-12">
				<header><a href="<?php echo $post_permalink; ?>" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a></header>
				<?php if ($image) : ?>
				    <a href="<?php echo $post_permalink; ?>" title="<?php echo $post_title; ?>"><img src="<?php echo $image[0]; ?>" alt="" /></a>
				<?php endif; 
				if($post_snippet): ?> 
					<p><a href="<?php echo $post_permalink; ?>" title="<?php echo $post_title; ?>"><?php echo $post_snippet; ?></a></p>
				<?php endif; ?>
			</article>
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php
	endif;
?>