<?php
require_once('regestre.php');
class ManagerRegestre extends  Regestre  {

    public function Ajouter(Regestre  $Regestre)
    {
        // echo "ici on ajoute un utilisateur dans la BDO";
        // echo $utilisateur->email;
    //     // echo $utilisateur;
    //   var_dump($Categorie);
    //     die();
  
        try {
            $bd=$this->Connexion();
            $req=$bd->prepare("INSERT INTO etudiant(Nom, Prenom,Adresse,Numero,Date_N,Genre,Nationalite,Date_Inscre)
            VALUES (:Nom,:Prenom,:Adresse,:Numero,:Date_N,:Genre,:Nationalite,:Date_Inscre)");
           
            $req->execute(array(
                'Nom' => $Regestre->getnom(),
                'Prenom' => $Regestre->getprenom(),
                'Adresse' => $Regestre->getAdress(),
                'Numero' => $Regestre->getNumero(),
                'Date_N' => $Regestre->getDateN(),
                'Genre' => $Regestre->getGenre(),
                'Nationalite' => $Regestre->getNationalite(),
                'Date_Inscre' => $Regestre->getDateinscre(),
    
            ));
            $req->closeCursor();
        } catch (Exception $e) {
            die('Erreur'. $e->getMessage());
        }
    }
    // public function Rechercategorie()
    //     {
    //         echo "ini on recherche un utilisateur dans la BD";
    //     }
    //     public function Suprimercategorie()
    //     {
    //         echo "ini on suprime un utilisateur dans la BD";
    //     }
    //     public function Modifiercategorie()
    //     {
    //         echo "ini on modifie un utilisateur dans la BD";
    //     }
    //     public function Listercategorie()
    //     {
    //         echo "ini on liste un utilisateur dans la BD";
    //     }
        // public function __toString()
        // {
        //     return "user email :".$this->nom."Son statu".$this->designation;
        // }
      
        public function Rechercategorie($id){
           
            try {
                $bd= $this->Connexion();
                $sql=$bd->prepare("SELECT * FROM categorie WHERE (id=?)");
                $sql->execute(array($id));
                $user=$sql->fetch();
                $sql->closeCursor();
                return $user;
            } catch (Exception $ex) {
    
                die('Erreur'.$ex->getMessage());
            }
        }
        public function SuprimerEtid($id){
            try {
                $bdd=$this->Connexion();
                $red=$bdd->prepare('DELETE FROM etudiant WHERE Id=?');
                $red->execute(array($id));
                $red->closeCursor();
            } catch (Exception $e) {
                die('Erreur :'.$e->getMessage());
            }
            
            
            
            
            
            }
    public function Modifiercategorie($Categorie){
    
        
        try {
            $bdd=$this->Connexion();
            $req=$bdd->prepare('UPDATE categorie SET nom=:nom, designation=:designation , images=:images  WHERE id=:id');
          
            $req->execute(array(
                    ':id'=> $Categorie->getid(),
                    ':nom' => $Categorie->getnom(),
                    ':designation' => $Categorie->getdesignation(),
                    ':images' => $Categorie->getimage(),
                   
            ));
        } catch (Exception $e) {
            die('Erreur :'.$e->getMessage());
        }
    }
    
    
    
    
    
    
    
    
    public function ListeEtudiant(){ 
       
        try {
        $bdd = $this->Connexion(); 
        $req = $bdd->query('SELECT * FROM etudiant'); 
        return $req;
        } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
        }
        }

      





}

    

?>