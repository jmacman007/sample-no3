<?php
get_header('home'); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section id="four0Four">
						<div class="col">
							<img src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>img/404-not-found-img.jpg" alt="404 Not Found">
							<h2>404</h2>
							<p>"No joy!"<br/> Page not found.</p>
						</div>
					</section>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--  .row -->
	</div><!--  .container -->

<?php
get_footer();
