<?php
    //tableau des prenom
    $prenoms = array('François','Laurion','Maurio','Jean','Wilson','Albert','Kevinn','Darel','Axel','Din');
    echo '<p>La liste des 10 prénoms du tableau</p>';
    echo '<ul>';
    for($i=0; $i<10; $i++){
        echo '<li type="square">'.$prenoms[$i].'</li>'; //affiche les prenoms contenu dans le tableau
    }
    echo '<ul>';