<?php get_header(); ?>

home.php // FUER DIE NEWS

<?php previous_posts_link(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!-- this is to make the page's vertical scrollbar appear the correct height -->
	<div id="mock-scroller"></div>
	<ul id="nav"></ul>

	<div id="content">
		

	
	<article class="window post">
		<section>	
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php the_content() ?>
		</section>
	</article>

<?php endwhile; endif; ?>


<?php next_posts_link(); ?>


</div>




<?php get_footer(); ?>