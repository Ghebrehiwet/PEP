<?php get_header(); ?>

<div id="pagecontent"><!--opening #middle -->
	<p id="bread-crumb">
					<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
			</p>
	<div id="content" class="404">
		<h3>Content Not found!</h3>
		<p>Sorry for not being able to get of what you have been looking for. Can you kindly search using our search engine below</p>
		<p><?php get_search_form();?></p>
	</div>
</div>
<?php get_sidebar("widget"); ?>
<?php get_footer();?>