<?php get_header(); ?>

<!-- content -->
<div id="content" class="content">
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php bcn_display(); ?>
	</div>

	<h2 class="pagetitle"><em><?php single_cat_title(); ?></em> Projects</h2>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<!-- Individual Post Styling -->
			<div <?php post_class('entry projitem'); ?> id="entry-<?php the_ID(); ?>">
				<h2 class="projtitle"><a href="<?php the_permalink() ?>" rel="bookmark" title='<?php strip_tags(the_title()); ?>'><?php the_title(); ?></a></h2>

				<div class="projimg"><?php the_post_thumbnail('full'); ?></div>
				<div class="projinfo">
					<strong>Software:</strong> <?php echo get_the_term_list(get_the_id(), 'portfolio_category', '', ' / ', ''); ?><br />
					<strong>Language/Type:</strong> <?php echo get_the_term_list(get_the_id(), 'portfolio_tag', '', ' / ', ''); ?><br />
					<br />
					<strong>Description:</strong>
					<?php the_excerpt(); ?>
					<br />
					<?php if (get_field('project_url')) : ?>
						<strong>Project URL:</strong> <a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a>
					<?php endif; ?>
					<br />
					<?php if (get_field('project_repo')) : ?>
						<strong>Project Repository:</strong> <a href="<?php the_field('project_repo'); ?>"><?php the_field('project_repo'); ?></a>
					<?php endif; ?>
				</div>

				<div class="clear"></div>
			</div>
		<?php endwhile;
	else : ?>
		<!-- No Posts Found -->
		<div class="entry" id="entry-err">
			<h2 class="pagetitle">Page not found.</h2>
		</div>
	<?php endif; ?>
</div>
<!-- /content -->

<?php get_sidebar('portfolio'); ?>

<?php get_footer(); ?>