<?php

require_once('regestre.php');
 require_once('ManagerRegestre.php');
 $id=$_POST['Id'];
 $ManagerReges=new  ManagerRegestre('','','','','','','','','');
 $user=$ManagerReges->SuprimerEtid($id);
;
header('location:listeEtudiant.php');







?>
