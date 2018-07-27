<?php
/**
 * Template name: Home Page
 *
 *
 * @package understrap
 */

get_header();



?>

<div class="home-background">
	<!-- Parallax landing -->
	<div class="parallax-landing" data-x-pos="right" data-speed="0.2" data-parallax="scroll" data-image-src="./wp-content/uploads/2018/07/train-branches.jpg">
		<div class="center-landing-text">
			<h2>Art & Adornment for the Free Spirit</h2>
		</div>
	</div>
	<!-- End Parallax landing -->
	
	<!-- Categories Slider -->
	<div class="parallax-slider" data-speed="0.1" data-parallax="scroll" data-image-src="/wp-content/uploads/2018/07/rocks2small.jpg">
		<div class="container">
			<?php echo do_shortcode("[wpb-woo-category-slider content_type='with_image' items='4' need_description='on' exclude='15']"); ?>
		</div>
	</div>
	<!-- End Categories Slider  -->

	<div class="pinterest-feed">
		<div class="container">
			<?php echo do_shortcode(""); ?>
		</div>
	</div>

</div>



<div class="footer-bg">
	<?php get_footer(); ?>
</div>