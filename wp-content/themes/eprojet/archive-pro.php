<?php 
    get_header();// inclusion de header.php
?>


<div class="col-lg-9">

    <?php
        if (have_posts()) : 
            while (have_posts()) : the_post();

    ?>

        
            <h4><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h4>
            <div><?php the_field('code_postal'); ?>-<?php the_field('ville'); ?></div>
            
            <hr>





    <?php
            endwhile;
            else :
                echo '<p> Aucun contenu ne correspond à votre demande...</p>';
            endif;
    ?>

</div>
<?php
	get_footer();
?>