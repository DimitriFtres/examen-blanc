<?php
require_once('data/liste_stagiaires.php');
$id = (isset($_GET["id"])) ? $_GET["id"] : null;

$error_msg = "";

if(!isset($id) || !is_numeric($id) || $id < 0 || $id >= count($stagiaires)){
    if(!isset($id)){
        $error_msg = "Veuillez fournir un id de stagiaire";
    }else {
        $error_msg = "Pas de stagiaire connu avec cet id";
    }
    echo "<strong> $error_msg </strong>";
    require_once("templates/liste.php");
}else{
    $nom = $stagiaires[$id]["nom"];
    $prenom = $stagiaires[$id]["prenom"];
    $sexe = $stagiaires[$id]["sexe"];
    $ddn = explode('/', $stagiaires[$id]["ddn"]);
    $hoobiesDuStagiaire = $stagiaires[$id]["hobbies"]
    require_once('template/detail.php')
    
}