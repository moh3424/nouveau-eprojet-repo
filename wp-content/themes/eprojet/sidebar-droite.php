

<div id="region-droite">
    <?php
        dynamic_sidebar('colonne-droite'); // on appelle la zone de widgets créée dans functions.php dont l'id est "colonne-droite"
    ?>
</div>

<hr>
<?php 
// Affichage de la dernière annonce parue :

// On fait notr propre requête en BDD pour sélectionner le premier post de type "annonce":

$arg = array (
        'post_type'        => 'annonce',// slug du CPT "annonce"
        'posts_per_page'   => '1' // correspond à LIMIT 1 dans SQL pour sélectionner le premier élément 

);// SELECT * FROM post WHERE post_type ='annonce' ORDER BY date DESC LIMIT 1

$query = query_posts($arg); 





?>
<div>
    <h2>Dernière annonce</h2>

    <?php
        if (have_posts()) :
            while (have_posts()) :  the_post();

    ?>
             <div>
                    <a href="<?php the_permalink() ;?>"><img class ="img-fluid" src="<?php the_field('photo') ;?>" alt=""></a>
                    <h4><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h4>
                    <div><span>Prix :</span><?php ' ' .the_field('prix'); ?> euros</div>
             </div>
    <?php
            endwhile;
        else : 
            echo 'Pas d\'annonce.....';
        endif;

    ?>

</div>

<?php   wp_reset_query();// on n'oublie pas restaurer la requête principale ;