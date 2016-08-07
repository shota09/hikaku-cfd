<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hikaku-cfd
 */

get_header(); ?>


	<div class="row mainContent">
		<div class="small-12 medium-9 columns primary">
			<article class="clearfix">
 <?php while ( have_posts() ) : the_post(); ?>
 	<h1 class="heading02 entryTitle"><?php the_title(); ?></h1>
				<div class="entryContent">
					<?php the_content(); ?>
				</div>
    <?php endwhile; // End of the loop. ?>
			</article>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
