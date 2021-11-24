<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emptytheme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div>Hello</div>
	<?php

	// Check value exists.
	if( have_rows('page_builder') ):
		$arr_module_slider_image = [];

		$arr_module_follow = [];
		$arr_module_follow_image = [];
		// Loop through rows.
		
		while ( have_rows('page_builder') ) : the_row();

			// Case: Paragraph layout.	
			if( get_row_layout() == 'module_slider' ):
				$text = get_sub_field('slider');
				$text2 = get_sub_field('title');
				$text3 = get_sub_field('slogan');
				$text4 = get_sub_field('content');
				$arr_module_slider_image[] = $text;
				$arr_module_slider_title = $text2;
				$arr_module_slider_slogan = $text3;
				$arr_module_slider_content = $text4;
				// Do something...
				?>
				<?php echo "<pre>";
				print_r($text);
				echo "</pre>";?>
				<?php

			// Case: Download layout.
			elseif( get_row_layout() == 'module_follow' ): 
				$file = get_sub_field('module_follow');
				$file2 = get_sub_field('image');
				$arr_module_follow[] = $file;
				$arr_module_follow_image[] = $file2;
				// Do something...
				?>
				<?php //echo "<pre>";
				// print_r($file);
				// echo "<br>";
				// print_r($file2);
				// echo "</pre>";?>
				<?php

			endif;

		// End loop.
		endwhile;

	// No value.
	else :
		// Do something...
	endif;
				// echo "<pre>";
				// print_r($file);
				// echo "<br>";
				// print_r($file2);
				// echo "<br>";
				// print_r($text);
				// echo "</pre>";
				print_r( $arr_module_slider_image[0]);

	// wp_die();
	?>
	
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
