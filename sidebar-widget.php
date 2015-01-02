<div class="col-md-2">


<?php if ( is_active_sidebar( 'widget' ) ) : ?>

		<?php dynamic_sidebar( 'widget' ); ?>

	<?php else : ?>
		<!-- Begin Categories -->
				<?php wp_list_categories(); ?> 
			<!-- End Categories -->
			<!-- Begin Links -->
		<!-- Create some custom HTML or call the_widget().  It's up to you. -->
		 

	<?php endif; ?>



</div>
				 
		
		 
				  
 

