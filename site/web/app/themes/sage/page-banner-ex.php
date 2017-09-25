<?php 
/**
* Template Name: Example of Template
*/
?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
            <section class="banner-example">
                <?php the_title(); ?>
                <?php the_content(); ?>
                <?php the_post_thumbnail(); ?>
                <?php if (has_post_thumbnail() ); ?>

                <<h3></h3>
            </section>
    <?php endwhile; ?>
<?php endif; ?>