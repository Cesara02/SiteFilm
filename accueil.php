<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Accueil</title>
    <link rel='stylesheet' type='text/css' media='screen' href='accueil.css'>
    <link rel="icon" href="">
</head>
<body> 
    <div class="header"> 
        <img src="assets/logo.png" width="120" alt="logo">
    </div>

    <div class="affiche"> 
        <?php 
            if(isset($_POST["FilmSubmit"])){
                if(!empty($_POST["Nom"]) && !empty($_POST["Genre"]) && !empty($_POST["Note"])){
                $Crud = 'C';
                $NomFilm = $_POST["Nom"];
                $Genre = $_POST["Genre"];
                $Note = $_POST["Note"];
                }
            }

        if($Crud!='0') {
            try {
                $MaBase = new PDO('mysql:host=mysql-bordrezcesar.alwaysdata.net; dbname=bordrezcesar_film', '256339_elliot', 'bordrez0908cesar2207');

                if($MaBase){
                    switch ($Crud){
                        case 'C':
                            echo "Ajout d'un film";
                            $req = "INSERT INTO `FILM` (`nom` `genre` `note`) VALUES ('".$NomFilm."','".$Genre."'.'".$Note."')";
                            $RequetStatement = $MaBase->query($req);

                            if($RequetStatement){
                                if($RequetStatement->errorCode()=='00000'){
                                    echo "Film ajouté avec succès ! ";
                                }
                            }
                catch(Exception $e){
                    $e ->getMessage();
                }
            }
        ?>
        <form action="" method="post">
        <label for="Nom">Nom fu film </label>
        <input type="text" name="Nom" id="Nom" required>

        <input type="submit" name="FilmSubmit" value="Ajouter">
    </div>  
</body>
</html>