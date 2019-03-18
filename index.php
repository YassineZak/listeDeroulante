<?php
include_once "Manager.php";
require_once __DIR__.'/../vendor/autoload.php';

$manager = new Manager();
$bdd = new Manager();
$autos = $bdd->query('SELECT * FROM V_JATO GROUP BY marque LIMIT 10');
dump($autos);

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
<label for="marque">marque</label>
<select  id="marque"  name="marque">
    <?php foreach ($autos as $auto): ?>
    <option value="<?=$auto->MARQUE;?>"><?=$auto->MARQUE;?></option>
    <?php endforeach; ?>
</select>
<label for="modele">modele</label>
<select id="modele" name="modele" >
    <?php foreach ($autos as $auto): ?>
        <option value="<?=$auto->MODELE;?>"><?=$auto->MODELE;?></option>
    <?php endforeach; ?>
</select>
<label for="version">version</label>
<select id=version  name="version">
    <?php foreach ($autos as $auto): ?>
        <option value="<?=$auto->VERSION;?>"><?=$auto->VERSION;?></option>
    <?php endforeach; ?>
</select>
<label for="motorisation">motorisation</label>
<select id="motorisation"  name="motorisation">
    <option value="dog">Dog</option>
</select>
<label for="CO2">CO2</label>
<select id="CO2"  name="CO2">
    <option value="dog">Dog</option>
</select>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
