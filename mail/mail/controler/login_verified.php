<?php 

if (isset($_POST['login'])) {
    require_once 'connexion.php';
  
    $password = md5($_POST['password']);
    $login = $Connexion->prepare("SELECT * from etudiant WHERE Adresse=:email AND password =:password");
    $login->bindParam('password', $password);
    $login->bindParam('email', $_POST['email']);
    $login->execute();
    $count = ($login->rowCount());
    // echo $count;
    if ($count === 1) {
      $user = $login->fetchObject();
      echo "vous avez connecte sur votre compte " . $user->name;
  
    } else {
      echo "votre mode pass ou email est incorrect";
    }
  
  
    if ($login->rowCount() == 1) {
  
      $user = $login->fetchObject();
      if ($user->ACTIVATED === true) {
        echo "votre compte est verifé";
        echo "<h1>bonjout </h1>" . $user->$Name;
      } else {
        echo "veuillez verifez votre compte ";
      }
    } else {
      echo "incorecte";
    }
  
  }
  ?>