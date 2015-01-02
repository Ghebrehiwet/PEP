<?php get_header(); ?>
<div class="row-fluid">
	<?php if (have_posts()) : ?>
                <div class="col-md-10">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p class="postmetadata">
                            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                            <span class="cat"><?php the_category(', ') ?></span>
                             
                            <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                        </p>
						<div>
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail();
								} 
							?>
						</div>
						
                        <?php the_content('More &raquo;'); ?>
                        <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                 </div>
                    <?php endwhile; ?>
                
                        <nav class="post-nav">
                            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                        </nav>
						<?php comments_template(); ?>
                
                
				
                <?php endif; ?>
			 
		<?php get_sidebar("widget"); ?>
	 
</div>	 
	 
<?php get_footer(); ?>