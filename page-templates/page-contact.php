<?php /* Template Name: Contact Us Template */ ?>
<?php
get_header();
// get_header('navbar');
get_template_part( 'template-parts/header/header', 'menu' );
get_template_part( 'template-parts/header/hero' );
?>
<main id="primary" class="site-main">
    <?php
        get_template_part( 'template-parts/section/about' );
        get_template_part( 'template-parts/section/services' );
        get_template_part( 'template-parts/section/call-to-action' );
        get_template_part( 'template-parts/section/portfolio' );
    ?>
</main><!-- #main -->
<?php get_template_part( 'template-parts/footer/footer', 'top' ); ?>
<?php
get_footer();
?>