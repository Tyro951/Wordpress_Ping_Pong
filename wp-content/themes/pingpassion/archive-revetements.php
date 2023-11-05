<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_hero
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Nos revêtements</h1>
				<p>Ce qui vous sied, nous importe   
				</p>
			</header><!-- .page-header -->
            <br>
			<section class="revetements-container">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
			?>

			<article class="revetements-card">
				<div class="img">
				<?php the_post_thumbnail(); ?>
				</div>
				<div class="revetements-card_content">

					<h2><?php the_title();  ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">En savoir +</a>
					
				</div>

			</article>

			<?php
			endwhile; ?>
			</section>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
