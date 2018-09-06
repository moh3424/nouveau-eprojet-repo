<?php 
    get_header();
?>

    <div class="col-lg-9">
        <?php  
            if (have_posts()):
                while (have_posts()) : the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <div class ="contenu"><?php the_content() ;?></div>
        <div><img src="<?php the_field('photo'); ?>" alt="" class="img-fluid"></div>
        <div class="info"><span>Marque :</span><?php the_field('marque'); ?></div>
        <div><span>modele :</span><?php the_field('modele'); ?></div>
        <div><span>KM :</span><?php the_field('km'); ?></div>
        <div><span>Carburant :</span><?php the_field('carburant'); ?></div>
        <div><span>Marque :</span><?php the_field('prix'); ?></div>
       
        <?php 
             endwhile;
            else :
                echo '<p> Aucune annonce ne correspond à vos critères !</p>';
            endif;
        ?>
    </div>

    <div class="col-lg-3">
        <?php
            get_sidebar('droite'); // inclusion du fichier qui s'appelle sidebar_droite.php
        ?>

    </div>










<?php 
    get_footer();
?>