<?php 
    get_header();// inclusion de header.php
?>

<div class="col-lg-3">
    <?php 
        get_sidebar('droite') ;
    ?>
</div>



<?php
    if (have_posts()) : 
        while (have_posts()) : the_post();

?>
        <div class="col-lg-9">
            <h2 class = "col-lg-12"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

            <div class="col-lg-12"><?php the_content() ;?></div>
        </div>



<?php
        endwhile;
        else :
            echo '<p> Aucun contenu ne correspond à votre demande...</p>';
        endif;
?>


<?php
	get_footer('contact');
?>