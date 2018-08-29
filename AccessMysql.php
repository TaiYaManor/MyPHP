<?php
$connection=mysqli_connect("esempio.com","admin","password1", “database1”);
if (mysqli_connect_errno())
  {
  echo "Errore: Impossibile connettersi a MySQL: " . mysqli_connect_error();
  }
$sql = "CREATE TABLE Users 
(
PID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(PID),
Nome CHAR(30),
Cognome CHAR(30),
Età INT
)";
/*
Per ogni colonna bisognerà specificare il tipo di dato (CHAR, INT, ecc.).
Per i valori CHAR, dovrai specificare la lunghezza della stringa (in questo caso 30).
 La funzione AUTO_INCREMENT aumenta il campo PID di 1 ogni entrata.
 Creando essenzialmente un numero ID per ogni entrata.
 */
if (mysqli_query($connection,$sql))
  {
  echo "Table Users created successfully";
  }
else
  {
  echo "Errore: Impossibile creare la tabella: " . mysqli_error($connection);
  }
?>
