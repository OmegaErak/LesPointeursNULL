
	
    <?php 
        $inscriptionreussie = 1;
		$pseudo = $_POST['pseudo'];
		$motdepasse = $_POST['motdepasse'];
		$email = $_POST['email'];
        $nombreutilisateur = file("./static/data/Utilisateur.csv");
        $ligneutilisateur =  strval(count ($nombreutilisateur));
        $list = array ($ligneutilisateur,$pseudo,$motdepasse,$email);
        $data = [];
        foreach($nombreutilisateur as $line){
            $data[] = str_getcsv($line);
            }
        for ($i = 1; $i < $ligneutilisateur ; $i++){
             if (strcmp($data[$i][1] , $pseudo)==0){
                $inscriptionreussie = 0;
                header("Location: inscription.php?inscriptionreussie=".$inscriptionreussie."");
                exit();
            }
        }
        
        



         $utilisateur = fopen("./static/data/Utilisateur.csv",'a');


		fputcsv($utilisateur, $list);
		fclose($utilisateur);
        //}
        
        header("Location: inscription.php?inscriptionreussie=".$inscriptionreussie."");
        exit();

?>