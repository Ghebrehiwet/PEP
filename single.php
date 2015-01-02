<?php get_header(); ?>

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default panel-body">
				<ul class="nav nav-pills nav-stacked">
					<?php get_sidebar("widget"); ?>
				</ul>
		</div>
		<div class="col-md-9">
			
					<?php if (have_posts()) : ?>
						 
							<?php while (have_posts()) : the_post(); ?> 
								<h2><?php the_title(); ?></h2>
								
								
								
								<p class="postmetadata">
									<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
									<span class="cat"><?php the_category(', ') ?></span>
									 
									<span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
								</p>
										
										
								<?php 
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										the_post_thumbnail();
										} 
								?>  
								
								<?php the_content(); ?>
								
								<?php if(get_the_tags()): ?>
									<p><?php the_tags(); ?></p>
								<?php endif; ?>
								
								<h3>Comments</h3> 
								 
								<?php comments_number("0 comments", "1 comment", "% comments"); ?>
							
							<?php the_author_posts_link(); ?>
							<?php comments_template(); ?>
							<ul class="post_nav">
								<?php previous_post_link("<li>%link</li>", "&lt; Previous"); ?>
								<?php next_post_link("<li>%link</li>", "Next &gt;"); ?>
							</ul>
				
							
							<?php endwhile; else: ?>
								<p>Sorry we couldn't find your post</p>
							<?php endif; wp_reset_query(); ?>
							
				</div>
		</div>
	</div> 
	 
</div>
			
		 
			

<?php get_footer(); ?>