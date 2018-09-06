
<?php 
    get_header();// inclusion de header.php
?>

    <?php
    // Nous faisons ici notre propre requête personnelle pour sélectionner les posts de type ANNONCE correspondants à a la catégorie choisie par l'internaute, et passée en GET dans l'URL
    $current_cat = get_query_var('category_name'); // cette fonction va cherche la valeur de la catégorie utiliseée par la requête principale de WP avant d'entrer dans cette page. Elle correspond à la catégorie sur laquelle on a cliqué et qui est passée dans l'URL
    // var_dump($current_cat); // Pour vérifier que l'on récupère bien la catégorie

    $arg =array( // un array pour déclarer les variable à passer à la requête de sélection ci-après

        'post_type'  => 'annonce',// on demande de sélectionner le type "annonce" (slug du CPT)

        'category_name' => $current_cat// et de sélectionner la catégorie de $current_cat, celle qui est choisie par l'internaute
    );
    $query = query_posts($arg); // selectionne en BDD les  posts  qui correspondent aux arguments mis dans $arg cidessus (=les annonces de la catégorie choisie). Remarque : Cette requête remplace completement la requête principale de WP => il faut donc en fin de script restaurer cette requête avec la fonction wp_reset_query().

    ?>



<div class="col-lg-9">

     <?php 
            if(have_posts()):
                while (have_posts()): the_post();

    ?>

       <div class="row cat-info">

            <div class="col-lg-3">
                <a href="<?php the_permalink() ;?>"><img class ="img-fluid" src="<?php the_field('photo'); ?>" alt=""></a>
            </div>

            <div class="col-lg-9">
            <h4><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h4>
            <div><span>Prix :</span><?php ' ' .the_field('prix'); ?> euros</div>

            </div>
       </div>

    <?php
                endwhile;
            else :
                echo '<p>Aucune annonce ne correspon à vos critères</p>';
            endif;
    
    ?>

 


</div>


<div class="col-lg-3">
    <?php 
        get_sidebar('droite') ;
    ?>
</div>








<?php
    get_footer();// inclusion fotter.php
    wp_reset_query();// on n'oublie pas restaurer la requête principale
?>