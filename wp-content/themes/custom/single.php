<?php get_header(); ?>

	<header class="header">
		<h1><?php the_title( ); ?></h1>
	</header>

	<div class="content">
		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class='post'>
				<header>
					<h3><a href="<?php the_permalink(); ?>"></a></h3>
					<div class="datos">
						<strong><?php the_author( ); ?></strong>
						<small><?php the_date(	 ); ?></small>
					</div>
				</header>
				<figure class='img'>
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>
				<footer>
					<?php the_content( ); ?>
				</footer>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>

	<footer>
		<?php dynamic_sidebar( 'suscribe' ); ?>
	</footer>

<?php get_footer( ); ?>
