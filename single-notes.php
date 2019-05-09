<?php
/**
 * Single post template for displaying single posts slugged notes and hiding the title and content unless the user is logged in
 * Sources: 
 * https://www.wpbeginner.com/wp-themes/create-custom-single-post-templates-for-specific-posts-or-sections-in-wordpress/
 * https://codex.wordpress.org/Conditional_Tags
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * License: GPL 2 or later
 *
 * Template Name: Notes
 * Template Post Type: post, page
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php
	if ( is_user_logged_in() ) {  // check if user is logged in
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile; // End of the loop.
	} else {
		echo '<p style="text-align: center;"><a href="' .  wp_login_url( get_permalink() ) . '" title="Login">Log in to view this post</a></p>';
	}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
