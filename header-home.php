<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed|Oswald:500" rel="stylesheet">
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>

<div class="bodyWrap">

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="col-sm-12">

				<div id="logoTop">
					<div class="row firstRow">
						<section class="col-sm-6 float-left topLeftLogo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src="<?php echo esc_url(home_url('/wp-content/themes/patriotPress/')); ?>img/logo-final-color.png" alt="Patriot Living Logo" title="Patriot Living Logo" width="180"></a>
							<h4>This is the tagline</h4>
						</section>
						<section class="float-right topRightContact">
							<div class="row">
								<div class="col-sm-12">
									<div class="pBlock"><a href="tel:1-000-000-0000"><i class="fas fa-phone fa-flip-horizontal hl"></i> 000-000-0000</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="pBlock"><a href="mailto:info@patriotliving.com" class="eLink"><i class="far fa-envelope-open hl"></i> E-Mail</a></div>
								</div>
							</div><!-- /row -->
						</section>
					</div><!-- /row -->


					<div class="row" style="clear:both;">
						<div class="col-12">
							<hr>
						</div>
					</div>
				</div>

			</div><!-- /col-12 -->
		</div><!-- /row -->
		<div id="topNavBox" class="row smallNav">
			<div class="col-sm-12 px-0">
		    <nav class="navbar navbar-expand-lg navbar-light">
	    	<div class="container-fluid">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
$args = array(
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'navbar-nav',
	'menu_id' => 'topNav',
	'walker' => new Bootstrap_Walker_Nav_Menu(),
);
if (has_nav_menu('primary')) {
	wp_nav_menu($args);
}
?>
	          </div>
	        </div>
		</nav>
	</div>
		</div>


	</header><!-- #masthead -->



	<div id="content" class="site-content">
