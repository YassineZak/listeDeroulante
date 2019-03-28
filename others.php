<?php
ini_set ('display_errors', 1);
error_reporting (E_ALL | E_STRICT);
include_once "Manager.php";
require_once __DIR__.'/vendor/autoload.php';
if (isset($_GET['id'])){
    $bdd = new Manager();
    $results = $bdd->query("SELECT * FROM V_JATO WHERE VERSION =:version LIMIT 10", array("version" => $_GET['id']));
    if (empty($results)){
        $return = array('error' => "aucun modele disponible");
    }
    else{
        $return = array(
            'error' => false,
            'results' => $results
        );
    }

}else{
    $return = array('error' => "aucun modele selectionné");
}
die(json_encode($return));