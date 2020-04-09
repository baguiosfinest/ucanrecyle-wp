<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div id="index-wrapper">

	<div id="content" tabindex="-1">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'sections/section', 'header' ); ?>

			<?php 
			// Check value exists.
			if( have_rows('section') ):

				// Loop through rows.
				while ( have_rows('section') ) : the_row();

					$layout = get_row_layout();

					get_template_part( 'sections/section', $layout );

				// End loop.
				endwhile;

			// No value.
			else :
				
			endif;
			
			?>  

			
			
		<?php endwhile; // end of the loop. ?>
        
	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer();