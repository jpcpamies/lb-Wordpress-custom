<?php 
/*
Template Name: Página Blog
*/
 ?>

<?php get_header(); ?>

<body>
	<?php query_posts( 'cat=1' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class='post'>
				<header>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
					<div class="datos">
						<strong><?php the_author( ); ?></strong>
						<small><?php the_date(	 ); ?></small>
					</div>
				</header>
				<figure class='img'>
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>
				<footer>
					<?php the_excerpt(); ?>
				</footer>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

<?php get_footer( ); ?>