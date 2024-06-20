<?php 
/**************************************/
## Standard blog layout
# modifié le 25/06/2019 à 12h30
/**************************************/

?>

<div class="standard-container">
	<?php 
		$args = array(
			'orderby' => 'date',
			'order'   => 'ASC'
		);

		$query = new WP_Query($args);

		if($query->have_posts()):
			while($query->have_posts()): $query->the_post();
				
				get_template_part('inc/theme/layouts/standard/content'); 
				
			endwhile;
			
			wp_reset_postdata();
		else:
			get_template_part('inc/theme/views/content-none'); 
		endif; 
		
	?>
</div>