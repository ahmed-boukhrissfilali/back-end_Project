<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php 
Session_start();
$_session['id'];
require 'connexion.php';
$checkCode = $conexion->prepare("SELECT securite_code FROM etudiant WHERE Id =:id");


?>
