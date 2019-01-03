<?php
/**
 * The template for displaying a static front page
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package Jem_Almazar
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="intro">
                <h1 class="name">Hello, I'm Jeremiah</h1>
                <p class="tagline">a web developer</p>
            </div>

            <?php
		if ( have_posts() ) :

			

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
