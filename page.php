<?php get_header(); ?>
<div class="row">
	<?php if (have_posts()) : ?>
                <div class="span9">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <h2><?php the_title(); ?></h2>
                         
						<div>
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail();
								} 
							?>
						</div>
						
                        <?php the_content('More &raquo;'); ?>
                        <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                
                    <?php endwhile; ?>
                
                         
                <?php endif; ?>
			  </div>
		<?php get_sidebar("widget"); ?>
	 
</div>	 
	 
<?php get_footer(); ?>