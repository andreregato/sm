<?php get_header('faq'); ?>

<div class="title">
	<div class="boxtitle">
		<div class="divtexto">
			<h1 class="titletext">
				<a title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
			</h1>
		</div>
	</div>
	<div class="linha-load"></div>
</div>
<div class="box">
		<?php
		$Pagfaq = new WP_Query (array(
			'paged' => get_query_var('paged', '1'),
			'posts_per_page' => -1,
			'orderby'          => 'publish_date',
			'order'            => 'DESC',
			'post_type'        => 'faq',
			'post_status'      => 'publish',
		));
		
		if ($Pagfaq->have_posts() ) {
			while ( $Pagfaq->have_posts() ) {
				$Pagfaq->the_post(); ?>
				
				<details>
					<summary title="<?php the_title_attribute();?>"><?php the_title(); ?></summary>
					<div class="text">
						<?php echo the_content();?>
					</div>
				</details>
			<?php 
			} // end while
		} // end if
		?>
</div>

<?php get_footer(); ?> 