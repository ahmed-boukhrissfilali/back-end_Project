<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<?php
    
       require_once 'connexion.php';
      
if(isset($_POST['send'])){
        $pass = md5($_POST['password']);
        $securite_code = md5(date("h:i:s"));
      $add = $Connexion->prepare("INSERT INTO etudiant(Adresse , password,securite_code) VALUES (:email,:pass ,:securite_code)");
      $add->bindParam('email' , $_POST['email'] );
      $add->bindParam('pass' , $pass);
      $add->bindParam('securite_code' , $securite_code);
      $add->execute();
      if($add->execute() == true){
    ?>

  <div class="alert alert-Success" role="alert">
    votre compte ete creé
  </div>;

<?php header('refresh:3 ;url=inscription.php 3');  } };?>
