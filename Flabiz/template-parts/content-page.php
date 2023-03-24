<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <div id="tf-header">
        <div class="container"> container
             <ol class="breadcrumb"> 
                <li><a href="index.html">Home</a></li>
                <li><a class="active">< the_title(); ?></a></li> -->
            <!-- </ol>
        </div>end container
     </div>  -->
<div id="tf-works">
	<div class="container">
	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content" id="form">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->
<?php
		// edit_post_link(
		// 	sprintf(
				/* translators: %s: Name of current post */
		// 		__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
		// 		get_the_title()
		// 	),
		// 	'<footer class="entry-footer"><span class="edit-link">',
		// 	'</span></footer><!-- .entry-footer -->'
		// );
	?>
</div>
	</div>

</article><!-- #post-## -->
