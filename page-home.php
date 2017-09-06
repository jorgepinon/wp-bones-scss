<?php
/*
 Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


			<ul class="feature-boxes">
				<li class="featurebox-1 tile tile--double">
					<h1><?php the_field('box1_headline'); ?></h1>
					<p><?php the_field('box1_subhead'); ?></p>
					<p><a href="<?php the_field('box1_button_link'); ?>"><?php the_field('box1_button_text'); ?></a></p>
				</li>

				<li class="featurebox-2 tile tile--single">
					<h2><?php the_field('box2_headline'); ?></h2>
					<p><?php the_field('box2_subhead'); ?></p>
					<p><a href="<?php the_field('box2_link_url'); ?>"><?php the_field('box2_link_text'); ?></a></p>
				</li>

				<li class="featurebox-3 tile tile--single">
					<h2><?php the_field('box3_headline'); ?></h2>
					<p><?php the_field('box3_subhead'); ?></p>
					<p><a href="<?php the_field('box3_link_url'); ?>"><?php the_field('box3_link_text'); ?></a></p>
				</li>

				<li class="featurebox-4 tile tile--single">
					<h2><?php the_field('box4_headline'); ?></h2>
					<p><?php the_field('box4_subhead'); ?></p>
					<p><a href="<?php the_field('box4_link_url'); ?>"><?php the_field('box4_link_text'); ?></a></p>
				</li>

				<li class="featurebox-5 tile tile--single">
					<h2><?php the_field('box5_headline'); ?></h2>
					<p><?php the_field('box5_subhead'); ?></p>
					<p><a href="<?php the_field('box5_link_url'); ?>"><?php the_field('box5_link_text'); ?></a></p>
				</li>
			</ul>


		</main>

		<?php get_sidebar(); ?>

	</div>

</div>


<?php get_footer(); ?>
