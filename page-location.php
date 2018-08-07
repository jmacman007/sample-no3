<?php
/**
 * Template Name: Location Page Template
 */

get_header('home');?>

<?php if ( is_page( 'location-1-detail' )) { ?>
	<?php get_template_part('inc/locOne'); ?>
<?php } else if ( is_page( 'location-2-detail' )) { ?>
	<?php get_template_part('inc/locTwo'); ?>
<?php } else if ( is_page( 'location-3-detail' )) { ?>
	<?php get_template_part('inc/locThree'); ?>
<?php } else { ?>
	<?php get_template_part('inc/locFour'); ?>
<?php } ?>

<?php get_footer('locations'); ?>
