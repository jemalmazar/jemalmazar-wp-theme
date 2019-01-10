<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jem_Almazar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h2 class="entry-title">
			<a href='<?php the_permalink() ?>'><?php the_title();?></a>
		</h2>

		<p class="entry-date"><?php echo get_the_date( 'M d, y' ) ?></p>
	</header><!-- .entry-header -->

	<div class="post-description">
		<?php echo CFS()->get( 'post_description' ); ?>
	</div>

	<hr class="style1">

</article><!-- #post-<?php the_ID(); ?> -->
