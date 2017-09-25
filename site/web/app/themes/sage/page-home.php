<?php 
/**
* Template Name: Home Template
*/
?>
<?php
// Instantiate WordPress Query Object for projects 
$arguments = array('post_type'=>'project');
$projects_query = new WP_Query($arguments);
?>
<section class="home-banner">
        <?php // Always start your Wp Loop ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php // can use this for my banner image ?>
            <?php // the featured image attached to all Posts / Pages are rendered using the_post_thumbnail function ?>
            <?php the_post_thumbnail(); ?>
            <?php // the content in the WYSIWYG Editor ?>
            <?php the_content(); ?>
        <?php endwhile; ?> 
    <section class="textblock">
    </section>
    <p>Creator of Unique and innovative projects which enhance the web experience through design, creativity and development. </p>    
</section>
<!-- <?php if ( $projects_query->have_posts() ): ?>
    <?php while( $projects_query->have_posts() ): ?>
    <?php $projects_query->the_post(); ?>
    <h1><?php the_field('client'); ?></h1>
    <h2><?php the_field('project_name'); ?></h2>
    <img src="<?php the_field('thumbnail'); ?>" />
    <?php if (have_rows('tech_stack') ): ?>
        <?php while(have_rows('tech-stack') ): ?>
            <?php the_row(); ?>
                <p><?php the_sub_field('languages'); ?></p>
            <?php endwhile; ?> 
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?> -->
 