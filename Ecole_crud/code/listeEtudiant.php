<?php
ob_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Liste des Etudiant</title>
</head>
<body>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Address Email</th>
      <th scope="col">Numero de Telephone</th>
      <th scope="col">Date de Naissance</th>
      <th scope="col">Genre</th>
      <th scope="col">Nationaliter</th>
      <th scope="col">Date Inscreption</th>
    </tr>
  </thead>
  <tbody>
  <?php
 require_once('regestre.php');
 require_once('ManagerRegestre.php');

 

$ManagerReges=new  ManagerRegestre('','','','','','','','');
$user=new Regestre ('','','','','','','','');

$user=$ManagerReges-> ListeEtudiant($user);

  foreach ( $user as  $users) {
   
    ?>
    <tr>
      <td scope="col"><?php  echo $users['Id']?></td>
      <td scope="col"><?php  echo $users['Nom'] ?></td>
      <td scope="col"><?php  echo $users['Prenom'] ?></td>
      <td scope="col"><?php  echo $users ['Adresse'] ?></td>
      <td scope="col"><?php  echo $users ['Numero'] ?></td>
      <td scope="col"><?php  echo $users ['Date_N'] ?></td>
      <td scope="col"><?php  echo $users['Genre'] ?></td>
      <td scope="col"><?php  echo $users['Nationalite'] ?></td>
      <td scope="col"><?php  echo $users['Date_Inscre'] ?></td>
     <td> <a href="" class="btn btn-outline-success">Valider</a></td>
     <td> <a href="" class="btn btn-outline-danger">Supprimer</a></td>
       </tr>
    <?php
   }
   ?>
    
  </tbody>
</table>
<?php
$content=ob_get_clean();
require_once('navbar.php');

?>
</body>
</html>