<?php

$reponse = $pdo->query("select * from Cafetiere where id = ".$id);
$tab=$reponse->fetch();
$this->prix = $tab["prix"];
$this->couleur = $tab["couleur"];
$this->model = $tab["model"];
?> 