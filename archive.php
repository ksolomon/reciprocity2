<?php get_header(); ?>

<!-- content -->
<div id="content" class="content">
	<?php is_tag(); ?>
	<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works.
		?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h2 class="pagetitle">Archive for the "<em><?php single_cat_title(); ?></em>" Category</h2>
		<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
			<h2 class="pagetitle">Posts Tagged "<em><?php single_tag_title(); ?></em>"</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="pagetitle">Blog Archives</h2>
		<?php } ?>

		<br />

		<?php while (have_posts()) : the_post(); ?>
			<!-- Individual Post Styling -->
			<article <?php post_class('homepost'); ?> id="entry-<?php the_ID(); ?>">
				<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title='Click to read: "<?php strip_tags(the_title()); ?>"'><?php the_title(); ?></a></h2>
				<div class="postmeta">
					<?php if (is_sticky()) : ?><h3 class="featured">Featured</h3><?php endif; ?>
					Posted <?php the_time('F jS, Y') ?> &nbsp; &mdash; &nbsp; Filed under <?php the_category(', ') ?> <?php if (has_tag()) { ?> &nbsp; &mdash; &nbsp; Tagged <?php the_tags('', ', '); } ?>
				</div>

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
		<h1>No posts found. Check back later.</h1>
	<?php endif; ?>
</div>
<!-- /content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>