<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		
		<div class="row footer-main">
			<div class="col-lg-6 offset-lg-3 text-center footer-links">
				<div class="row">
					<div class="col-md-3"><a href="/home">Home</a></div>
					<div class="col-md-3"><a href="/home">Shop</a></div>
					<div class="col-md-3"><a href="/home">Blog</a></div>
					<div class="col-md-3"><a href="/home">Cart</a></div>
				</div>

			</div>
		</div>
		<div class="text-center copyright">
			&copy; Copyright <?php echo date('Y'); ?> SuddenShrines
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

