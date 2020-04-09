<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="index-wrapper">

	<div id="content" tabindex="-1">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if(get_field('showtitle')) : ?>
				<?php get_template_part( 'sections/section', 'header' ); ?>
			<?php endif; ?>
			
			<?php 
			// Check value exists.
			if( have_rows('section') ):

				// Loop through rows.
				while ( have_rows('section') ) : the_row();

					$layout = get_row_layout();

					// echo '<pre>';
					// 	var_dump( get_field('section') );
					// echo '</pre>';

					get_template_part( 'sections/section', $layout );

					// include( locate_template( 'sections/section-' . get_row_layout() . '.php' ) );

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
