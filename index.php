<?php
    require_once __DIR__ ."/controller/baseController.php";
    include_once __DIR__ .'/template/header.inc.php'
?>
<body>
    

    <!-- En-tête de la page -->
    <header>
    

        <h1>
            <span aria-hidden="true">🤡</span> <?= $newtitle->title ?>
        </h1>
    </header>

    <!-- Contenu principal --> 
    <main>
        <!-- Section Affiche du film -->
        <section class="movie-poster">
            <img 
                src="https://wave.fr/images/1916/07/joker-3-bonnes-raisons-aller-voir-film-cinema-aujourdhui.jpg" 
                alt="Affiche du film Le Joker" 
                loading="lazy">
        </section>

        <!-- Section Storyline -->
        <section class="storyline">
        <?php
            # $actors =  $newtitle->actorsInfo();
             $story = $newtitle->storyline();
            # print_r($story) 
         
            /*  print "<h2>".$story['title']."</h2>\n"; 
            print "<p>".$story['storyline']."<p>"; */
        ?>
            
                <h2>
                    <?= $story['title'] ?>
                </h2>
                <p>
                    <?= $story['storyline'] ?>
                </p>

                
               
         
        </section>

        <!-- Section Cast -->
        <section class="cast">
            <h2>Cast Principal : </h2>
            <?= $sign ?>
            <!--modifier -->
            <?php
                
                //$actors =  $newtitle->actorsInfo();

            ?>
           <!--  <?php foreach($actors as $role):?>
            <ul>
                <li>
                    <strong><?= $role['prenom']." ".$role['nom'] ?>
                    </strong> <?= $role['role'] ?>
                </li>
             
            </ul>
            <?php endforeach;?> -->
            <!-- test bdd -->
            <?php include_once __DIR__ .'/model/model.php'?>
        </section>

        <!-- Section Date de Sortie -->
        <section class="release-date">
            <h2>Date de Sortie</h2>
            <p><time datetime="<?= $_date?>"><?= $_years->format('d/M/Y') ?></time></p>
        </section>

        <!-- Bouton vers AlloCiné -->
        <section class="trailer-button">
            <a href="https://www.allocine.fr/video/player_gen_cmedia=19582354&cfilm=255710.html" target="blank">
                <span class="material-symbols-outlined" aria-hidden="true">
                    video_file
                </span>Voir la bande-annonce
            </a>
        </section>
       
    </main>

    <!-- footer et directive -->
    <?php
        // commentaire court
        /* long */
        # test
        include_once __DIR__ .'/template/footer.inc.php'
    ?>

    <!-- <pre>
        <?php
            # print_r($_SERVER)
        ?>
    </pre> -->
</body>
</html>
