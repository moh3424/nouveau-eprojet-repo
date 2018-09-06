<?php 
    get_header();// inclusion de header.php
?>



<div class="col-lg-9">
        <?php
            if (have_posts()) : 
                while (have_posts()) : the_post();
                

        ?>

                <h2 ><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

                <div><?php the_content() ;?></div>
                <div><?php the_field('code_postal'); ?></div>
                <div><?php the_field('ville'); ?></div>
                <div><?php the_field('telephone'); ?></div>

               
             

        <?php
                endwhile;
                else :
                    echo '<p> Aucun contenu ne correspond à votre demande...</p>';
                endif;
        ?>
</div>

    <div class="col-lg-3">
        <?php
            get_sidebar('droite'); // inclusion du fichier qui s'appelle sidebar_droite.php
        ?>

    </div>
    <a href="<?php bloginfo('url');?>/pro">Retour à la liste des Pofessionnels</a>


<?php
	get_footer();
?>