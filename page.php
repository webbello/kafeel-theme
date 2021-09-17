<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

				get_template_part( 'template-parts/content', 'page' );

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