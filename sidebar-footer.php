<div class="row-fluid">
	 <div class="footer col-lg-3 col-md-3 col-sm-6"> 
	 
	 <?php if ( is_active_sidebar( 'footer' ) ) : ?>

			<?php dynamic_sidebar( 'footer' ); ?>

		<?php else : ?>
			<!-- Begin Categories -->
					<?php wp_list_categories(); ?> 
				<!-- End Categories -->
				<!-- Begin Links -->
			<!-- Create some custom HTML or call the_widget().  It's up to you. -->
			 

		<?php endif; ?>
	 
	 
	 </div>
	
</div>