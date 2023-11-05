<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_hero
 */
$dataRevetement = get_fields();
get_header();
?>
	<body>
		
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="single-card_content">
				<h2><?php the_title();?></h2>					
			</div>
		<div class="container">  
			<div class="card">  
				<div class="imgBx">  
					<img src="<?php the_post_thumbnail(); ?>">
				</div>  
				<div class="contentBx">  
					<h2><?php the_title();?></h2>  
					<div class="size">  
						<h3>Rapidité, Contrôle et Adherence</h3>  
						<span><?= $dataRevetement['rapidite'] ?> </span>  
						<span><?= $dataRevetement['controle'] ?> </span>
						<span> <?= $dataRevetement['adherence'] ?> </span>   
					</div>  
					<div class="color">  
						<h3>Epaisseur</h3>  
						<span> <?php the_field( 'epaisseur' ); ?> </span>   
					</div>  
				<a href="#">Acheter</a>  
				</div>  
			</div>  
   		</div> 
            <br>
        <article class="single-card">
			<p>Les notes rapidité, controle et adherence sont sur 5!<?php the_content(); ?></p>

		</article>
		<?php
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	</body>

<?php
get_sidebar();
get_footer();
