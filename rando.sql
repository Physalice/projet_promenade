
------------créer une base de donnée--------------
CREATE DATABASE PMDDatabase;
USE PMDDatabase;
---------crée un utilisateur sans privilège
CREATE USER "adminPMD"@"%" IDENTIFIED 
-------avec un mot de passe
BY "Calder@Vu@";
------nouvelle requête pour donner des privilège à l'utilisateur
GRANT ALL PRIVILEGES 
-----sur la database tous les éléments gérer par l'adresse url de la database
ON PMDDatabase.* TO "adminPMD"@"%";

----------créer une table Promenade------------
CREATE TABLE Promenades (
  id INT PRIMARY KEY AUTO_INCREMENT, --------clé primaire de lien avec d'autre table
  titre      VARCHAR (255),
  auteur     VARCHAR (255),
  cp         VARCHAR (10),
  ville      VARCHAR (255),
  pays       VARCHAR (255),
  depart     VARCHAR (255),
  arrivee    VARCHAR (255),
  files      VARCHAR (255),
  itineraire VARCHAR (255)
 
);
-----------crée une nouvelle promenade-------les valeur sont donnée pour remplir la base de donnée qui ne peut pas être null----
-------modifiable par la création d'objet en php------
INSERT INTO Promenades (titre, auteur, cp, ville, pays, depart, arrivee, files, itineraire) 
VALUES ('Moléson', "Nelson", "1017", "Nyon", "Suisse", "Bassin", "Col du faux", "URLimage", "blablablablablablabla");
------------mettre à jour une promenade-------------
UPDATE Promenades
SET titre="Moléson",
 auteur="Nelson", 
 cp="1017", 
 ville="Nyon", 
 pays="Suisse", 
 depart="Bassin", 
 arrivee="Col du faux", 
 files="URLimage", 
 itineraire="blablablablablablabla"
WHERE id = 1    ----------------condition d'affichage de l'update 

------------selectionner un élément de liste par son id-----------
SELECT p.id, 
      p.titre, 
      p.files,
      p.auteur,
      p.ville, 
      p.pays
FROM Promenade p
WHERE p.id = 3;
/* crée un lien entre le USER et l'image de profil
CREATE TABLE profileimg(
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  USERID INT(11) NOT NULL, 
  STATUS(11) INT NOT NULL
);
