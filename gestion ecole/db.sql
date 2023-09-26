create DATABASE db_etec;
use db_etec;
-- creation du table
CREATE TABLE `etudiant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Numero` varchar(100) NOT NULL,
  `Date_N` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Nationalite` varchar(100) NOT NULL,
  `Date_Inscre` datetime NOT NULL,
  `password` varchar(100),
  `ACTIVATED` boolean default false,
  `securite_code` VARCHAR(100),
  PRIMARY KEY (`Id`)
);

--------------------------
CREATE TABLE  `filiere` (
  `Id_F` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_F` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_F`)
);


--- insertion des test ---

INSERT INTO etudiant(Adresse , password , securite_code) VALUES ();



select * from etudiant;


UPDATE etudiant set  ACTIVATED  = 1 WHERE securite_code  = :securite_code and
    )


drop database db_etec

SELECT * FROM etudiant
