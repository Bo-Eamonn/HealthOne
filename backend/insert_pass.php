<?php

try{
    include ("connectUserDB.php");
    $query = $db->prepare("INSERT INTO users(uname, pswrd) VALUES ('Bo-Eamonn de Snoo','" . sha1('wachtwoord') . "')");
    if($query->execute()){
        echo "nieuwe gegevens zijn toegevoeg;";
    } else {
        echo "er is iets mis gegaan";
    }
} catch(PDOException $e){
    die ("error!: " . $e->getMessage());
}