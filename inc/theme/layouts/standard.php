<?php 
/**************************************/
## Standard blog layout
# modifié le 25/06/2019 à 12h30
# Modif Cyril - 100 articles par page
# modifier aussi /themes/writee/archive.php
/**************************************/

?>

<div class="standard-container">
    <?php 
        $args = array(
            'orderby' => 'date',
            'order'   => 'ASC',
            'posts_per_page' => 100, // Modifier ici pour afficher 100 articles par page
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
        
        // Commentez ou supprimez la pagination
        // if ($query->max_num_pages > 1) writee_pagenavi();
    ?>
</div>