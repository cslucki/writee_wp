<?php 
/****************************************/
## Blog post header content.
## Modif Cyril - on affiche pas la catégorie + format de date
/***************************************/

global $post;

$date_format = 'd/m';
?>
	<div class="entry-header" style="text-align: left;">
		
	
	<?php
	/*
	<div class="entry-meta">
		<span class="entry-cat"><?php the_category(' ')?></span>
		</div>
		*/
		?>
		<?php 
	
	// sans lien		
	// the_title( '<h1 class="entry-title">', '</h1>' );

	// Ajout d'un lien vers l'article avec style en ligne pour aligner à gauche
	the_title( '<h1 class="entry-title" style="text-align: left;"><a href="' . get_permalink() . '" style="text-align: left;">', '</a></h1>' );


		
	   ?>
		<div class="entry-meta" style="text-align: left;">
			
			<span class="entry-date"><?php the_time($date_format); ?></span>
		</div>
	</div>