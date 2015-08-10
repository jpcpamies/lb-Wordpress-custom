<?php 
/*
Template Name: Página Blog
*/
 ?>

<?php get_header(); ?>

	<?php query_posts( 'cat=1' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Test if the current post is in category 3. -->
			 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
			 	<!-- Otherwise, the div box is given the CSS class "post". -->
			<div>
			 	<?php if ( in_category( '6' ) ) : ?>
			 		<div class="flores-blog">
			 	<?php else : ?>
			 		<div class="post">
			 	<?php endif; ?>
			</div>

			<article class='post'>
				<header>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
					<div class="datos">
						<strong><?php the_author( ); ?></strong>
						<small><?php the_date(	 ); ?></small>
					</div>
				</header>
				<figure class='img'>
					<?php the_post_thumbnail( 'medium' ); ?>
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