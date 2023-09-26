<?php
require_once('regestre.php');
require_once('ManagerRegestre.php');

$name=$_POST['nom'];
$pre=$_POST['prenom'];
$add=$_POST['email'];
$num=$_POST['num'];
$dateN=$_POST['dateN'];
$genre=$_POST['genre'];
$natio=$_POST['natio'];
$dateInc = date("Y-m-d");  

$user=new Regestre ($name,$pre,$add,$num,$dateN,$genre,$natio,$dateInc);

$ManagerReges=new  ManagerRegestre('','','','','','','','');

$Regestrs=$ManagerReges-> Ajouter($user);
// var_dump($user);
// die();
header('location:listeEtudiant.php')
?>