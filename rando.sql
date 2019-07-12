
------------créer une base de donnée--------------
CREATE DATABASE PMDDatabase;
USE PMDDatabase;

CREATE USER "adminPMD"@"%" IDENTIFIED 
BY "Calder@Vu@";
GRANT ALL PRIVILEGES 
ON PMDDatabase.* TO "adminPMD"@"%";

----------créer une table Promenade------------
CREATE TABLE Promenades (
  id INT PRIMARY KEY AUTO_INCREMENT,
  titre      VARCHAR (255),
  auteur     VARCHAR (255),
  cp         VARCHAR (10),
  ville      VARCHAR (255),
  pays       VARCHAR (255),
  depart     VARCHAR (255),
  arrivee    VARCHAR (255),
  img_pass   VARCHAR (255),
  itineraire VARCHAR (255)
 
);
-----------crée une nouvelle promenade-----------------
INSERT INTO Promenades (titre, auteur, cp, ville, pays, depart, arrivee, img_pass, itineraire) 
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
 img_pass="URLimage", 
 itineraire="blablablablablablabla"
WHERE id = 1
------------selectionner un élément de liste par son id-----------
SELECT p.id, 
      p.titre, 
      p.img_pass,
      p.auteur,
      p.ville, 
      p.pays
FROM Promenade p 
WHERE p.id = :idRAndo