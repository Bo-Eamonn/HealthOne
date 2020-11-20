<?php

try{
    include ("connectDB.php");
    $query = $db->prepare("INSERT INTO users(uname, pswrd, cat, catDesc) VALUES ('Bo-Eamonn','" . sha1('pass') . "','3','Admin')");
    if($query->execute()){
        echo "nieuwe gegevens zijn toegevoeg;";
    } else {
        echo "er is iets mis gegaan";
    }
} catch(PDOException $e){
    die ("error!: " . $e->getMessage());
}