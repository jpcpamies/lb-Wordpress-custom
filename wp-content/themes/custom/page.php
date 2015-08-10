<?php 
/*
Template Name: Página curso
*/
 ?>

<?php get_header(); ?>

	<header class='Course-header'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="Course-header__title  display1"><?php the_title( ); ?></h1>
			<h2 class="Course-header__subtitle  body2"><?php the_content( ); ?></h2>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</header>
	<main>
		<?php dynamic_sidebar( 'ideal-para' ); ?>
		<?php dynamic_sidebar( 'aprenderas' ); ?>
		<?php dynamic_sidebar( 'detalle' ); ?>
	</main>

<?php get_footer( ); ?>