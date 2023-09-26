<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php

    session_start();
    
    if(isset($_POST['search'])){
      require_once( 'connexion.php');

    $set  = $Connexion->prepare("SELECT * FROM etudiant WHERE Id=:id");
    $set->bindParam("id",$_POST['id']);
    $set->execute();
    if($set->rowCount()>=1){
      $_SESSION['id'] =(int)($_POST['id']);
      foreach($set as $user){ ?>
<table class="table">
            <thead class = "thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">email</th>
                <th scope="col">status</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo  $user['Id'] ?>'</th>
                <td><?php echo  $user['Adresse'] ?></td>
                <td>  <?php echo  $user['ACTIVATED'] ?></td$user->
                <td>
                <form method="post" action="Btn_valide.php">
                  <button type="submit" class="btn btn-success btn-block" name="valide" ">Valide</button>
                  </form>
                  </td>
                  <td>
                <form method="post" ">
                  <button type="submit" class="btn btn-danger btn-block" name="supprimer" ">supprimer</button>
                  </form>

              </tr>
            </tbody>
          </table>


  <?php }  ; } }
  else{
    echo 'auccun nom ';
  }
  

  ?>