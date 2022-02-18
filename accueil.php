<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Accueil</title>
    <link rel='stylesheet' type='text/css' media='screen' href='accueil.css'>
    <link rel="icon" href="">
</head>
<body> 
    <!-- Création du header -->
    <div class="header"> 
        <img src="assets/logo.png" width="120" alt="logo">
    </div>

    <div class="affiche"> 
        <?php 
        //Déclaration de la variable Crud
        $Crud = '0';
        //On récupére les données du formulaire
            if(isset($_POST["FilmSubmit"])){
                //Verification du contenu des champs
                if(!empty($_POST["Nom"])){
                    //Insertion des champs dans les tables
                $Crud = 'C';
                $NomFilm = $_POST["Nom"];
                }
            }
            //Connexion a la BDD avec PDO
        if($Crud!='0') {
            try {
                //Le PDO attend des paramétre comme le nom de la base , le user avec son mot de pass
                $MaBase = new PDO('mysql:host=mysql-bordrezcesar.alwaysdata.net; dbname=bordrezcesar_film', '256339_elliot', 'bordrez0908cesar2207');
                //Si la connexion est vrai alors on continue
                if($MaBase){
                    //Switch pour gérer les requettes
                    switch ($Crud){
                        case 'C':
                            echo "Ajout d'un film";
                            //On crée la requête
                            $req = "INSERT INTO `FILM` (`nom`) VALUES ('".$NomFilm."')";
                            $RequetStatement = $MaBase->query($req);
                            //Vérification du statement
                            if($RequetStatement){
                                //Si la BDD répond '00000' alors c'est ok
                                if($RequetStatement->errorCode()=='00000'){
                                    echo "Film ajouté avec succès ! ";
                                    echo $NomFilm. "est le nouveau film.";
                                }else{
                                    echo "Erreur N°".$RequestStatement->errorCode()." lors de l'insertion";
                                }
                            }else{
                                echo "Erreur dans le format de la requête";
                            }

                            break;
                        case 'R':
                            echo "Vous avez fait une selection de film";
                            break;
                        case 'U':
                            echo "Vous avez fait une update de film";
                            break;
                        case 'D':
                            echo "Vous avez fait une suppression de film";
                            break;
                        default:
                            echo "Vous n'avez pas fait de requête CRUD";
                            break;
                        }
                }
            }catch(Exception $e){
                $e->getMessage();
            }
        }
        ?>
        <!-- On va maintenant afficher le formulaire pour inserer un film -->
        <form action="" method="post">
        <label for="Nom">Nom du film </label>
        <input type="text" name="Nom" id="Nom" required>

        <input type="submit" name="FilmSubmit" value="Ajouter">
    </div>  
</body>
</html>