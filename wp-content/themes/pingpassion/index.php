<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pingpassion
 */

get_header();
?>
<body>
	<main id="primary" class="site-main">
	<article class="banniere">
		<script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.493/build/spline-viewer.js"></script>
		<div class="logo">
			<spline-viewer url="https://prod.spline.design/vYcdSjasXCeet7vO/scene.splinecode"></spline-viewer>
		</div>
		<div class="descriptionbanniere">
		<h2>PING PASSION</h2><br>
		<p> Adresse: 7 QUAI D'AUSTERLITZ - 75013 PARIS </p>
		</div>
	</article><br>
	<div class="menu">
		<div class="toggle">
			<ion-icon name="share-social"></ion-icon>
			</div>
		
			<li style="--i:0;--clr:#1877f2">
			<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
			</li>
			<li style="--i:1;--clr:#25d366">
			<a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
			</li>
			<li style="--i:2;--clr:#1da1f2">
			<a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
			</li>
			<li style="--i:3;--clr:#FF5733">
			<a href="#"><ion-icon name="logo-reddit"></ion-icon></a>
			</li>
			<li style="--i:4;--clr:#0a66c2">
			<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
			</li>
			<li style="--i:5;--clr:#c32aa3">
			<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
			</li>
			<li style="--i:6;--clr:#1b1e21">
			<a href="https://github.com/Tyro951"><ion-icon name="logo-github"></ion-icon></a>
			</li>
			<li style="--i:7;--clr:#ff0000">
			<a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
			</li>
		</div>
	
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	</body>
	<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
	<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
	<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script><script  src="./script.js"></script>
<?php
get_sidebar();
get_footer();
