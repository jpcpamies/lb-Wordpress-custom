<?php get_header(); ?>

	<div class="Header">
		<header>
			<div class="Main-header">
				<h1 class="Title  display1"><?php bloginfo('name') ?></h1>
				<h2 class="Subtitle  headline"><?php bloginfo('description') ?></h2>
			</div>
		</header>
	</div>
	<div class="Main  Module-outer">
		<section class="Landing-banner  Module-inner">
			<div class="Landing-banner__outer">
				<?php query_posts( 'cat=4' ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<header class='Landing-banner__title  headline'>
						<h3><?php the_title( ); ?></h3>
					</header>
					<div  class='Landing-banner__copy  body1'>
						<?php the_content( ); ?>
					</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>
		</section>
		<section class="Courses-feed">
			<div class="Category Category-1  Module-inner">
				<div class="Category__header">
					<h3>Flores</h3>
				</div>
				<div class="Category__body">
					<?php query_posts( 'order=Des&cat=2' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<div class="Course-post">
								<header class='Cours-post__header  body1'>
									<h3><?php the_title( ); ?></h3>
								</header>
								<figure class='Course-post__logo'>
									<?php the_post_thumbnail( 'thumbnail' ); ?>
								</figure>
								<footer class='Course-post__link'>
									<?php the_content( ); ?>
								</footer>
							</div>
						</article>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>
			<div class="Category Category-2  Module-inner">
				<div class="Category__header">
					<h3>Frutas</h3>
				</div>
				<div class="Category__body">
					<?php query_posts( 'order=Des&cat=3' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<div class="Course-post">
								<header class='Cours-post__header  body1'>
									<h3><?php the_title( ); ?></h3>
								</header>
								<figure class='Course-post__logo'>
									<?php the_post_thumbnail( 'thumbnail' ); ?>
								</figure>
								<footer class='Course-post__link'>
									<?php the_content( ); ?>
								</footer>
							</div>
						</article>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>
		</section>
	</div>

<?php get_footer( ); ?>
