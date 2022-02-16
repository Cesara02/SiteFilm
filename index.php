<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exo Final TP1 php</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <?php
        if(isset($_POST["Valider"])){
        if($_POST["password"]=="root" && $_POST["login"]=="root" ){
            $_SESSION["EtatConnexion"]=true;
            header('Location: accueil.php');
        }      
    }
    ?>
    <div id="container">
    <form action="" method="post">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" id="login" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>

        <input type="submit" value="Valider" name="Valider" >
    </div>
    </form>
</body>
</html>