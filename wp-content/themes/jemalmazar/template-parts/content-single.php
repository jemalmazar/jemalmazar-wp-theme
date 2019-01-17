<?php
/**
 * Template part for displaying single posts.
 *
 * @package Jem_Almazar
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        
        <div class="entry-meta">
            <p class="entry-date"><?php echo get_the_date( 'M d, y' ) ?></p>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <hr class="style1">

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
    
</article><!-- #post-<?php the_ID(); ?> -->