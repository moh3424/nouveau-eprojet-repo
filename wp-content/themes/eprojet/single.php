<?php 
    get_header();// inclusion de header.php
?>




<?php
    if (have_posts()) : 
        while (have_posts()) : the_post();

?>

        <h2 class = "col-lg-12"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

        <div class="col-lg-12"><?php the_content() ;?></div>
        <div class="col-lg-12"><img src="<?php the_field('photo'); ?>" alt=""></div>
        <div class="col-lg-12"><?php the_field('marque'); ?></div>
        <div class="col-lg-12"><?php the_field('modele'); ?></div>
        <div class="col-lg-12"><?php the_field('km'); ?></div>
        <div class="col-lg-12"><?php the_field('carburant'); ?></div>
        <div class="col-lg-12"><?php the_field('prix'); ?></div>
        <div class="col-lg-12"><?php the_field('code_postal'); ?></div>
        <div class="col-lg-12"><?php the_field('ville'); ?></div>
        <div class="col-lg-12"><?php the_field('telephone'); ?></div>




<?php
        endwhile;
        else :
            echo '<p> Aucun contenu ne correspond à votre demande...</p>';
        endif;
?>


<?php
	get_footer();
?>