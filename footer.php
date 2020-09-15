<?php include (TEMPLATEPATH.'/includes/get_theme_options.php'); ?>

					</div>
					<!-- /wrapper -->

					<!-- footer -->
					<div id="footer">
						<div id="footcol_1" class="column">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 1')) : else : ?>

							<?php endif; ?>
						</div>
						<div id="footcol_2" class="column">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 2')) : else : ?>

							<?php endif; ?>
						</div>
						<div id="footcol_3" class="column">
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 3')) : else : ?>

							<?php endif; ?>
						</div>
					</div>
					<!-- /footer -->

				</div><!-- /st-content-inner -->
			</div><!-- /st-content -->
		</div><!-- /st-pusher -->
	</div><!-- /st-container -->

	<script src="<?php bloginfo('template_url'); ?>/includes/scripts.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/classie.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/sidebarEffects.js"></script>

	<?php if ($sf_settings['sf_analytics']) { echo html_entity_decode($sf_settings['sf_analytics'])."\n"; } ?>

	<!-- Plugin Hook -->
	<?php wp_footer(); ?>
</body>
</html>
