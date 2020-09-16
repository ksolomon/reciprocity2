<?php
/*
	Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- content -->
<section id="content" class="content home">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<!-- Individual Post Styling -->
			<article <?php post_class('homepost'); ?> id="entry-<?php the_ID(); ?>">
				<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h2>

				<?php the_excerpt(); ?>

				<div class="clear"></div>
			</article>
		<?php endwhile; ?>
			<!-- Navigation -->
			<?php if ($wp_query->max_num_pages > 1) : ?>
				<?php sf_display_nav("numbar"); ?>
			<?php endif; ?>
	<?php else : ?>
		<!-- No Posts Found -->
		<section id="post-0" class="post error404 not-found">
			<h2 class="pagetitle">Page not found.</h2>
			<p>Apologies, but we were unable to find the requested page.</p>
			<?php get_search_form(); ?>
		</section>
	<?php endif; ?>
</section>
<!-- /content -->

<?php get_footer(); ?>