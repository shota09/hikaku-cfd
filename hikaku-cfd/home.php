<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hikaku-cfd
 */
<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hikaku-cfd
 */

get_header(); ?>

	<div class="row mainContent">
		<div class="small-12 medium-9 columns primary">

     <?php if ( have_posts() ) : ?>

      <h1 class="heading02"><?php the_archive_title(); ?></h1>
     <?php /* Start the loop */ ?>
<?php while ( have_posts() ): the_post(); ?>

       <article class="recent__item clearfix">
				<div class="recent_thumb">
					<a href="<?php echo esc_url( get_permalink() ); ?>">

					<?php if(has_post_thumbnail()){?>
					<?php has_post_thumbnail('thumbnail'); ?>
					<?php  }else{ ?>
					<img src="http://placehold.it/150x150/f6f6f6/f6f6f6" alt=""><?php }?></a>
				</div>

				<h4 class="recent__title">
					<a href="<?php echo esc_url( get_permalink() ); ?>"<?php the_title(); ?></a>
				</h4>
		  </article>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
      <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>
      </div>



		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
