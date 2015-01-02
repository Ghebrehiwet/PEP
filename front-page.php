<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<div class="pull-right" id="flexslider">
		<?php 
			echo do_shortcode("[metaslider id=29]"); 
		?>
	</div>
	<h1>Mission Statement</h1>
	<p>Established in 1964, Prospect Enrichment Preschool welcomes all children and families into our diverse setting without discrimination and regardless of ability to pay.  We provide a rich early learning environment with emphasis on literacy, cognitive and social skills.  Our goal is for all children to enter kindergarten with the skills and confidence to be successful lifelong learners.</p>
 
</div>

<hr> 
<div class="row-fluid">
	 
	<div class="span4 col-xs-4 .col-sm-4">
		 <a href="http://smile.amazon.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/amazon-smile.jpg" alt="amazon smile" /></a> 
	</div>
	<div class="span4 .col-xs-4 .col-sm-4">
		 <a href="https://www.shopwithscrip.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/shop-with-scrip.jpg" alt="shop with script" /></a>
	</div>
	<div class="span4 .col-xs-4 .col-sm-4">
		 <a href="https://co.clickandpledge.com/sp/d1/default.aspx?wid=50681" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/donate-button.jpg" alt="donate button" /></a>
	</div>
</div>

<hr>

<div class="row-fluid">
	<div class="span4 col-xs-4 .col-sm-4">
		<h2>Testimonials</h2>
				<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							}
						?>

					  <img src="<?php bloginfo('template_url'); ?>/images/testimonials.png" alt="testimonials">
							<?php
								$testimonials = new WP_Query( array( "category_name" => "testimonials" ));
								$testimonials->the_post();
							?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary">Read More  &raquo;</button></a>
							<?php wp_reset_postdata(); ?>

	</div>
	<div class="span4 .col-xs-4 .col-sm-4">
		<h2>Kidoz Corner</h2>
					<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							}
						?>

					  <img src="<?php bloginfo('template_url'); ?>/images/kids.JPG" alt="kidz">
							<?php
								$testimonials = new WP_Query( array( "category_name" => "kidscorner" ));
								$testimonials->the_post();
							?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary">Read More  &raquo;</button></a>
							<?php wp_reset_postdata(); ?>

	</div>
	<div class="span4 .col-xs-4 .col-sm-4">
		<h2>Spotlight</h2>
				<?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							}
						?>

					  <img src="<?php bloginfo('template_url'); ?>/images/spotlight.jpg" alt="spotlight">
							<?php
								$testimonials = new WP_Query( array( "category_name" => "testimonials" ));
								$testimonials->the_post();
							?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary">Read More  &raquo;</button></a>
							<?php wp_reset_postdata(); ?>

	</div>
</div>

<?php get_footer(); ?>