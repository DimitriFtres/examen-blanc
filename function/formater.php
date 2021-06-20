<?php
require_once("data/liste_stagiaires.php");

function formatage(string $sexe, string $nom, string $prenom) : string{
    $result = "";
    if($sexe === "M"){
        $result = "Mr";
    }else{
        $result = "Mme";
    }
    $nom = strtoupper($nom);
    $prenom = ucfirst(strtolower($prenom));
    return " $result $nom $prenom";
}