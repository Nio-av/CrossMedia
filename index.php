<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- fuer eine statische Seite -->

<div id="wrapper">   
 <div id="vertical-center">  
     
     <article>
        <h1> <?php the_title(); ?> </h1>
        <?php the_content(); ?>
     </article>

<div id="sidebar"></div><!-- sidebar -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>