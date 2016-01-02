<?php

/**
 * footer.php
 * Template for footer content.
 */

?>

				</div><!-- /.container -->
			</main><!-- /#main -->
		</div><!-- /[data-sticky-wrap] -->

		<footer class="padding-top-large padding-bottom bg-primary" data-sticky-footer>

			<?php
				$options = keel_get_theme_options();
			?>

			<div class="container container-large text-center" >

				<?php if ( $options['colors'] === 'default' ) : ?>
					<hr>
				<?php endif; ?>

				<?php get_template_part( 'nav', 'secondary' ); ?>

				<div class="row">
					<?php get_template_part( 'nav', 'social' ); ?>
					<div class="grid-half text-left-large">
						<?php get_search_form(); ?>
					</div>
				</div>

				<div class="row">
					<div class="grid-half text-left-large margin-bottom">
						<?php
							if ( !empty( $options['footer1'] ) ) {
								echo do_shortcode( stripslashes( $options['footer1'] ) );
							}
						?>
					</div>
					<div class="grid-half text-right-large margin-bottom">
						<?php
							if ( !empty( $options['footer2'] ) ) {
								echo do_shortcode( stripslashes( $options['footer2'] ) );
							}
						?>
					</div>
				</div>

				<p class="text-left-large"><a target="_blank" href="http://gomakethings.com">Harbor for WordPress Theme by Go Make Things</a></p>

			</div>

		</footer>


		<?php wp_footer(); ?>

	</body>
</html>