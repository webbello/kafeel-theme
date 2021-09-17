<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kafeel
 */
get_header();
get_template_part( 'template-parts/header/header', 'menu' );
?>
<main id="primary" class="site-main ">
	<?php get_template_part( 'template-parts/header/header', 'breadcrumb' ); ?>
	<section class="inner-page mt-4">
      <div class="container">
		<div class="row g-5">
			<div class="col-md-8">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kafeel' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kafeel' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
      </div>
    </section>

</main><!-- #main -->

<?php get_template_part( 'template-parts/footer/footer', 'top' ); ?>
<?php
get_footer();
?>