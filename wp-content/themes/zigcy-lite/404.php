<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zigcy Lite
 */

get_header();
?>
	<div class="container">
		<div class="sml-error-wrapper">

			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<div class="page-content">
							<div class="store-mart-lite-404">
								<span><?php esc_html_e( '4', 'zigcy-lite' );?></span>
								<span class="zero"><?php echo esc_html( '0');?></span>
								<span><?php esc_html_e( '4', 'zigcy-lite' );?></span>
							</div>
							<p><?php esc_html_e( 'We are sorry, the page you&rsquo;ve requested is not available. Perhaps searching can help or go back to', 'zigcy-lite' ); ?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Homepage','zigcy-lite') ?></a>
							</p>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>

<?php
get_footer();
