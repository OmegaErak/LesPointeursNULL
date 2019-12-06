<?php
$donnees['menu'] = "Accueil";
$donnees['titre_page'] = "page d'accueil";
include "entete.php";
        $motdepasse = $_POST['motdepasse'];
        $pseudo= $_POST['pseudo'];
        $nombreutilisateur = file("./static/data/Utilisateur.csv");
        $ligneutilisateur =  strval(count ($nombreutilisateur));
        $data = [];
        foreach($nombreutilisateur as $line){
            $data[] = str_getcsv($line);
        }
        $code = 1;
        for ($i = 1; $i < $ligneutilisateur ; $i++){
            if (strcmp($data[$i][1], $pseudo) == 0){
                if(strcmp($data[$i][2], $motdepasse) == 0){
                    $userid=$data[$i][0];
                    header("Location: index.php?userid=".$userid."");
                    exit();
                } else {
                    $code = 0;
                }
            }
        }
        header("Location: connexion.php?code=".$code);
		exit();
  ?>