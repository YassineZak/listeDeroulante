<?php
ini_set ('display_errors', 1);
error_reporting (E_ALL | E_STRICT);
include_once "Manager.php";
require_once __DIR__.'/vendor/autoload.php';
$bdd = new Manager();
$autos = $bdd->query('SELECT * FROM V_JATO GROUP BY marque LIMIT 10');

//$query = $bdd->query('SELECT * FROM V_JATO LIMIT 5');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>liste deroulante</title>
</head>
<body>
<form method="POST" action="#">
<label for="marque">marque</label>
<select  id="marque"  name="marque" data-target="modele" data-url="modele.php" class="ajaxList">
    <option value="0" selected>Marque</option>
    <?php foreach ($autos as $auto): ?>
    <option value="<?=$auto->MARQUE;?>"><?=$auto->MARQUE;?></option>
    <?php endforeach; ?>
</select>
<label for="modele">modele</label>
<select id="modele" name="modele" data-target="version" data-url="version.php" class="ajaxList">
        <option value="0">Modele</option>
</select>
<label for="version">version</label>
<select id=version  name="version" data-target="motorisation, #CO2" data-url="others.php" class="ajaxList">
    <option value="0">version</option>
</select>
<label for="motorisation">motorisation</label>
<select id="motorisation"  name="motorisation" data-target="CO2" data-url="others.php" class="ajaxList">
    <option value="dog">Dog</option>
</select>
<label for="co2">CO2</label>
<select id="co2"  name="CO2">
    <option value="dog">Dog</option>
</select>
<input type="submit" name="Envoyer" value="Envoyer">
</form>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
