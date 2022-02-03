<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Notation Film</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Site notation film</h1>

<?php
    $BasePDO = new
    PDO("mysql:host=mysql-bordrezcesar.alwaysdata.net;dbname=bordrezcesar_film;port=3306", $UserBDD,$PassBDD);
?> 

<form action="" method="get" class="stars5" >
    <div class="starRating">
        <input id="s5" type="radio" name="etoile" value="5">
        <label for="s5">5</label>
        <input id="s4" type="radio" name="etoile" value="4">
        <label for="s4">4</label>
        <input id="s3" type="radio" name="etoile" value="3">
        <label for="s3">3</label>
        <input id="s2" type="radio" name="etoile" value="2">
        <label for="s2">2</label>
        <input id="s1" type="radio" name="etoile" value="1">
        <label for="s1">1</label>
    </div>
    <input id="btnStart" type="submit" name="Vote" value="Valider">
</form>

</body>
</html> 