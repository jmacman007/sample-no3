
<div class="container-fluid">

	<div class="row">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="logoHours">
							  <img class="card-img-top" src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>/img/logo-final-white.png" alt="Patriot Living logo" title="Patriot Living logo">
							  <h4>This is the tagline</h4>
							  <p><span>Hours:</span><br/>
								Mon. - Tues.	9:00am - 4:00pm<br/>
								Fri.		10:00am - 2:00pm<br/>
								Sat.		10:00am - 4:00pm<br/>
								Sun.		12:00pm - 3:00pm</p>
						</div><!-- /.logoHours -->
					</div>
					<div class="col-md-3">
						<nav>
							<?php
$args = array(
	'theme_location' => 'footer',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'navbar-nav',
	'walker' => new Bootstrap_Walker_Nav_Menu(),
);
if (has_nav_menu('footer')) {
	wp_nav_menu($args);
}
?>
						</nav>
					</div>
					<div class="col-md-4 social">
						<a href="tel:1-000-000-0000"><i class="fas fa-phone fa-flip-horizontal hl"></i> 000-000-0000</a>
						<ul>
							<li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>/img/fb-white.png" alt="facebook" title="facebook"></a></li>
							<li><a href="https://www.twitter.com/" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>/img/twitter-white.png" alt="twitter" title="twitter"></a></li>
							<li><a href="https://www.instagram.com/" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>/img/ig-white.png" alt="instagram" title="instagram"></a></li>
						</ul>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#colophon -->

	</div><!-- /row -->

		<div class="row darkFoot">
			<div class="container">
				<div class="row">
						<p>&copy; <?php bloginfo('name');
echo ' - ';
echo date("Y");?> All rights reserved.<br/>
		Please read our <a href="<?php echo esc_url(home_url('/')); ?>terms-of-service" target="_blank">Terms of Service</a>.  <a href="<?php echo esc_url(home_url('/')); ?>sitemap" target="_blank">Sitemap</a>.</p>
				</div>
			</div>
		</div><!-- .row -->

</div><!-- /container-fluid -->

<?php wp_footer();?>

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.5'><\/script>".replace("HOST", location.hostname));
//]]></script>

</div><!-- /bodyWrap -->

</body>
</html>
