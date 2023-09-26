<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<?php 
session_start();

require_once( 'connexion.php');
require_once '../mail.php';
$id = (int)($_SESSION['id']);

if(isset($_POST['valide'])){

  var_dump($id);
$set=$Connexion->prepare("SELECT * FROM etudiant WHERE Id=:id");
$set->bindParam("id",$id);
$set->execute();
$vald=($set->execute()) ? "succes" : "no";

$set=$set->fetchObject();
$email = (string)($set->Adresse);
var_dump($email);
$mail->setFrom('tdt828928@gmail.com','Ecole etec');
$mail->addAddress("$email");
  $mail->Subject = 'Verification de votre compte ecole etec  '; 
  $mail->Body ='<style>*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }</style>
</head>
<body>
  <div
    style="
      box-sizing: border-box;
      min-height: 100vh;
      padding: 100px 15px;
      background: rgba(41, 164, 193, 0.1);
      color: #4d4d4d;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
        Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji,
        Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;

    "'.'
  >
    <div
      style="
        max-width: 600px;
        padding: 50px;
        margin: 0 auto;
        border-top: 10px solid #29a4c1;
        border-radius: 10px;
        background-color: #fff;
      "
    >'.'
      <img
        alt="etec"
        style="height: 100px; margin-bottom: 10px"
        src="eteclogo.svg"
        class="CToWUd"
        data-bit="iit"
      />
      <div style="margin-bottom: 50px; font-size: 40px; color: #020101">
        Bienvenu  a votre  Etec ecole 
      </div>
      <div style="font-size: 16px">
        Click sur la bouton seduces pour valider votre compte
      </div>
      <div'.'
        style="
          padding: 30px 0;35ssh -T git@github.com
          border-bottom: 1px solid rgba(255, 0, 0, 0.1);
        "
      >
        <a
          href="#"
          style="
            display: block;
            max-width: 360px;
            height: 48px;
            line-height: 48px;
            background-color: #29a4c1;
            border-radius: 4px;
            text-align: center;
            color: #fdfdfd;
            text-decoration: none;
          "
        
          >Active votre compte</a
        >
      </div>
     
        <p style="margin-top: 30px">Merci pour votre confidance<br />Etec Administration</p>
      </div>
    </div>
  </div>';
      
  $mail->send();
  if($mail->send()){
  ?>
  <div class = "alert alert-success"> le message de validation du compte etait envoiyer </div>
<?php  } else{ ?>
  <div class = "alert alert-danger"> erroor </div>
<?php };}?>