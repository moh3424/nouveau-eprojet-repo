</div><!-- cette balise ferme un div ouvert dans header.php -->
</section><!-- cette balise ferme un section ouvert dans header.php -->


<footer class="container-fluid align-items-center">

    <div class="container">

        <div class="row">
            <div class="col-lg-4">
            <?php 
      
            ?>
          
                    <?php
                        dynamic_sidebar('footer-gauche');// Appelle la zone de widget d'id "region-entete" déclarée dans function.php
                    ?>
                

            </div>
            <div class="col-lg-4">
               <p>&copy; Mes petites annonces - 2018</p>
            </div>
            <div class="col-lg-4">
                <!-- code à venir -->
                <?php 
                            wp_nav_menu(array( // cette fonction permet d'appeler le menu que nous avons déclaré dans functions.php
                                'theme_location' => 'secondary', //correspond à l'id du menu déclaré dans functions.php
                                'menu_class'     => 'navbar-nav' // pour ajouter une classe CSS à notre menu
                            ));
                            // Ou bien  wp_nav_menu('secondary');
                        
                        ?>
            </div>
          
        </div><!-- fin .row -->

    </div><!-- fin .container -->




</footer>

<?php 
    wp_footer();//permet d'inclure les éventuelles script avant la fermeture du body s'ils sont déclarés dans le fichier functions. Cette inclusion obligatoire.
    
?>

</body>
</html>