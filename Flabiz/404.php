<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<style>
		.my_img {
			width: 50%;
		}
	</style>

	<div class="container text-center my-5">
		<img class="my_img" src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" alt="404 Page">
		<br>
		<a href="<?php echo esc_url(home_url()); ?>" class="btn btn-warning btn-lg mt-3">Go Home</a>

	</div>

</div><!-- .content-area -->

<?php get_footer(); ?>