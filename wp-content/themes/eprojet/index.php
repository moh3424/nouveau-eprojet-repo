<?php 
    get_header();// inclusion de header.php
?>




<?php
    if (have_posts()) : 
        while (have_posts()) : the_post();

?>

        <h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

        <div class="contenu"><?php the_content() ;?></div>




<?php
        endwhile;
        else :
            echo '<p> Aucun contenu ne correspond à votre demande...</p>';
        endif;
?>
























<?php
    get_footer();// inclusion de footer.php
?>