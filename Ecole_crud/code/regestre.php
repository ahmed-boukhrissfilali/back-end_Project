<?php



require_once('model.php');
class Regestre extends Model
{
private $id;
private $nom;
private $prenom;
private $Adress;
private $Numero;
private $DateN;
private $Genre;
private $Nationalite;
private $Dateinscre;

public function __construct(string $nom,string  $prenom,string  $Adress,string  $Numero,string  $DateN,string $Genre,string $Nationalite,string  $Dateinscre)
{
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->Adress=$Adress;
    $this->Numero=$Numero;
    $this->DateN=$DateN;
    $this->Genre=$Genre;
    $this->Nationalite=$Nationalite;
    $this->Dateinscre=$Dateinscre;
}
public function getid()
{
    return $this->id;
}
public function getnom()
{
    return $this->nom;
}

public function getprenom()
{
    return $this->prenom;
}

public function getAdress()
{
    return $this->Adress;
}

public function getNumero()
{
    return $this->Numero;
}
public function getDateN()
{
    return $this->DateN;
}
public function getGenre()
{
    return $this->Genre;
}
public function getNationalite()
{
    return $this->Nationalite;
}
public function getDateinscre()
{
    return $this->Dateinscre;
}


public function setid($id)
{
    return $this->id=$id;

}
public function setnom($nom)
{
    return $this->nom=$nom;

}
public function setslug($prenom)
{
    return $this->prenom=$prenom;

}
public function setimage($Adress)
{
    return $this->Adress=$Adress;

}
public function setDateN($DateN)
{
    return $this->DateN=$DateN;

}

public function setGenre($Genre)
{
    return $this->Genre=$Genre;

}

public function setNationalite($Nationalite)
{
    return $this->Nationalite=$Nationalite;

}

public function setDateinscre($Dateinscre)
{
    return $this->Dateinscre=$Dateinscre;

}
public function setNumero($Numero)
{
    return $this->Numero=$Numero;

}
}










?>





