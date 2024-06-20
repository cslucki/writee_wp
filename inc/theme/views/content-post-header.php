<?php 
/****************************************/
## Blog post header content.
## Modif Cyril - on affiche pas la catégorie + format de date
/***************************************/

global $post;

$date_format = 'd/m';
?>
	<div class="entry-header">
		
	
	<?php
	/*
	<div class="entry-meta">
		<span class="entry-cat"><?php the_category(' ')?></span>
		</div>
		*/
		?>
		<?php 
	
			the_title( '<h1 class="entry-title">', '</h1>' );


		
	   ?>
		<div class="entry-meta">
			
			<span class="entry-date"><?php the_time($date_format); ?></span>
		</div>
	</div>