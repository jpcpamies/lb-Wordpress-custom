<?php get_header(); ?>
<body>
	<section class="Header">
		<header>
			<div class="Main-header">
				<h1 class="Title "><?php bloginfo('name') ?></h1>
				<h2 class="Subtitle"><?php bloginfo('description') ?></h2>
			</div>
		</header>
	</section>
	<section class="Main">
		<?php query_posts( 'order=Des' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<div class="Course-post">
					<header class='Cours-post__header'>
						<h3><?php the_title( ); ?></h3>
					</header>
					<figure class='Course-post__logo'>
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</figure>
					<footer class='Course-post__link'>
						<a href="<?php the_permalink(); ?>">Saber más</a>
					</footer>
				</div>
			</article>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
		
	</section>
</body>