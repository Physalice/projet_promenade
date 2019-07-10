
------------créer une base de donnée--------------
CREATE DATABASE "PMDDatabase";
USE "PMDDatabase";
CREATE USER "adminPMD"@"%" IDENTIFIED BY "Calder@Vu@";
GRANT ALL PRIVILEGES ON PMDDatabase.* TO "adminPMD"@"%";



----------créer une table Promenade------------
CREATE TABLE Promenade (
  id INT PRIMARY KEY AUTO_INCREMENT;
  titre VARCHAR (255);
  CP INT;
  lieu VARCHAR (255);
  id_maitre INT;
  FOREIGN KEY (id_maitre) REFERENCES Maitre (id)
);
