<?php 
    get_header();// inclusion de header.php
?>




<?php
    if (have_posts()) : 
        while (have_posts()) : the_post();

?>

        <h2 class = "col-lg-12"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

        <div class="col-lg-12"><?php the_content() ;?></div>
        




<?php
        endwhile;
        else :
            echo '<p> Aucun contenu ne correspond à votre demande...</p>';
        endif;
?>

<div class="col-lg-6 mt-5">
<?php 
// Affichage de la dernière annonce parue :

// On fait notr propre requête en BDD pour sélectionner le premier post de type "annonce":

$arg = array (
        'post_type'        => 'pro',// slug du CPT "pro"
        'posts_per_page'   => '3' // correspond à LIMIT 3 dans SQL pour sélectionner le premier élément 

);// SELECT * FROM post WHERE post_type = 'pro' ORDER BY date DESC LIMIT 1

$query = query_posts($arg); 





?>
<div>
    <h2>Liste des trois Professionnels</h2>

    <?php
        if (have_posts()) :
            while (have_posts()) :  the_post();

    ?>
             <div>
                   
                    <h4><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h4>
                    <div><span>ville :</span><?php ' ' .the_field('ville'); ?> euros</div>
                    <div><span>Code postal :</span><?php ' ' .the_field('code_postal'); ?> euros</div>
                    <hr>
             </div>
    <?php
            endwhile;
        else : 
            echo 'Pas d\'annonce.....';
        endif;

    ?>

</div>

</div>

<div class="col-lg-6 mt-5">
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

</div>


<?php
	get_footer();
?>