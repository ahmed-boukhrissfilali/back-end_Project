<?php
abstract class Model 
{
    protected $bdd;

    public function Connexion(){
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        $bdd=new PDO('mysql:host=localhost;dbname=db_etec','root','', $pdo_options);
        return $bdd;

    }
}

?>