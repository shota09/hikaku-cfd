

<?php get_header(); ?>
<div class="space-content-1">
</div>
<div class="mainVisual">
		<img src="<?php echo get_template_directory_uri(); ?>/img/image-alignment-1200x4002-1200x400.jpg " height="100" width="200" alt=""class="main" />
	</div>
	<?php get_sidebar(); ?>
	<div class="space-content-2">
</div>
	<div class="feature">
		<div class="row">
			<div class="small-12 medium-4 large-4 columns feature__item">
				<div class="feature__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bnr_250_250_click-sec.gif" height="500" width="200" alt="未来">
				</div>
				<h3 class="feature__title">第1位</h3>
				<div class="feature__content">インベスタードットコム</div>
			</div>
			<div class="small-12 medium-4 large-4 columns feature__item">
				<div class="feature__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/imagesender.jpg" height="500" width="200" alt="">
				</div>
				<h3 class="feature__title">第2位</h3>
				<div class="feature__content">DMM。COM</div>
			</div>
			<div class="small-12 medium-4 large-4 columns feature__item">
				<div class="feature__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/banner_1st_300_300.png" height="500" width="200" alt="">
				</div>
				<h3 class="feature__title">第3位</h3>
				<div class="feature__content">SBI証券</div>
			</div>
		</div>
	</div>
	<div class="recent">
		<div class="row">
			<div class="small-12 medium-12 large-8 large-centered columns">
				<h2 class="heading01">最新のお知らせ</h2>

       <?php
       $myposts = get_posts('numberposts=5');
       foreach ($myposts as $post) : setup_postdata($post); ?>
				<article class="recent__item clearfix">
					<div class="recent__thumb">
						<a href="<?php echo esc_url( get_permalink() ); ?>">

						<?php if(has_post_thumbnail()){ ?>
						 <?php the_post_thumbnail('thumbnail'); ?>
						 <?php }else{ ?>
					  	<img src="http://placehold.it/150x150/f6f6f6/f6f6f6" alt=""><?php } ?></a>
					</div>
					<h4 class="recent__title">
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
					</h4>
				</article>
				<?php endforeach;
				wp_reset_postdata(); ?>
				<div class="recent__more">
					<a href="/news" class="button">さらにお知らせを見る</a>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>
