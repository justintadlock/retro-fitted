<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Retro-fitted
 * @subpackage Template
 */
?>
				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php do_atomic( 'close_main' ); // retro-fitted_close_main ?>

			</div><!-- .wrap -->

		</div><!-- #main -->

		<?php do_atomic( 'after_main' ); // retro-fitted_after_main ?>

		<?php do_atomic( 'before_footer' ); // retro-fitted_before_footer ?>

		<div id="footer">

			<?php do_atomic( 'open_footer' ); // retro-fitted_open_footer ?>

			<div class="wrap">

				<div class="footer-content">
					<?php hybrid_footer_content(); ?>
				</div><!-- .footer-content -->

				<?php do_atomic( 'footer' ); // retro-fitted_footer ?>

			</div><!-- .wrap -->

			<?php do_atomic( 'close_footer' ); // retro-fitted_close_footer ?>

		</div><!-- #footer -->

		<?php do_atomic( 'after_footer' ); // retro-fitted_after_footer ?>

	</div><!-- #container -->

	<?php do_atomic( 'close_body' ); // retro-fitted_close_body ?>

	<?php wp_footer(); // wp_footer ?>

</body>
</html>