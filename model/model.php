<?php

include "model/eleve.php";
include "model/raison.php";
include "model/formateur.php";
include "model/urgence.php";
include "model/ticket.php";

function createConnection() {
$host = '127.0.0.1';
	$db   = 'generateurticket';
	$user = 'root';
	$pass = '';
	$dsn = "mysql:host=$host;dbname=$db";

	try {
     $pdo = new PDO($dsn, $user, $pass);
	} catch (\PDOException $e) {
     	throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }

   return $pdo;
}



function getAllEleves() {

   $pdo = createConnection();

    $stmt = $pdo->query ('SELECT * FROM eleve');

    $tableauEleves = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $eleve = new Eleve($row["id"], $row["nom"], $row["prenom"]);
      $tableauEleves[] = $eleve;
      }

      return $tableauEleves;

      $pdo = null;
   
}

function getAllRaisons() {

   $pdo = createConnection();

    $stmt = $pdo->query ('SELECT * FROM raison');

    $tableauRaisons = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $raison = new Raison($row["id"], $row["libelle"]);
      $tableauRaisons[] = $raison;
      }

      return $tableauRaisons;

      $pdo = null;

}

function getAllFormateurs() {

   $pdo = createConnection();

    $stmt = $pdo->query ('SELECT * FROM formateur');

    $tableauFormateurs = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $formateur = new Formateur($row["id"], $row["nom"], $row["prenom"]);
      $tableauFormateurs[] = $formateur;
      }

      return $tableauFormateurs;

      $pdo = null;

}

function getAllUrgences() {

   $pdo = createConnection();

    $stmt = $pdo->query ('SELECT * FROM urgence');

    $tableauUrgences = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $urgence = new Urgence($row["id"], $row["libelle"]);
      $tableauUrgences[] = $urgence;
      }

      return $tableauUrgences;

      $pdo = null;

}

function getAllTickets() {
   //a) se connecter à la bdd 
   $pdo = createConnection();
   //b) prépare requete sql 
   
   $stmt = $pdo->query ('SELECT t.id, e.nom as e_nom, e.prenom as e_prenom, f.nom as f_nom, f.prenom as f_prenom, r.libelle as r_libelle, u.libelle as u_libelle
                       FROM ticket as t 
                       INNER JOIN eleve as e ON t.idEleve = e.id
                       INNER JOIN formateur as f ON t.idFormateur = f.id
                       INNER JOIN raison as r ON t.idRaison = r.id
                       INNER JOIN urgence as u ON t.idUrgence = u.id
                       ORDER BY t.id ASC');
 
   //c) executer requête sql
       $tableauTickets = [];
   
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {      
           $eleve=$row["e_prenom"]." ".$row["e_nom"];
           $formateur=$row["f_prenom"]." ".$row["f_nom"];
       $tickets = new Ticket($row['id'],$eleve, $row["r_libelle"],$formateur, $row["u_libelle"]);
       
       $tableauTickets[] = $tickets;
   }  
       return $tableauTickets;

       //fermeture de la connexion à la bdd
       $pdo = null;
}


function createTicketIntoBDD($idEleve, $idRaison, $idFormateur, $idUrgence) {
   $sql = "INSERT INTO `ticket` (`id`, `idEleve`, `idRaison`, `idFormateur`, `idUrgence`) VALUES (NULL, :idEleve, :idRaison, :idFormateur, :idUrgence);";
   
   //objet pdo 
   $pdo = createConnection();
   $sth = $pdo->prepare($sql);
   $sth->bindParam(':idEleve', $idEleve);
   $sth->bindParam(':idRaison', $idRaison);
   $sth->bindParam(':idFormateur', $idFormateur);
   $sth->bindParam(':idUrgence', $idUrgence);
   $sth->execute();
   
   // Close connexion ...
   $pdo = null;
}

function deleteContact() {

   $pdo = createConnection();

   $id = $_GET['id'];

   $stmt = $pdo ->exec ('DELETE FROM TICKET WHERE id= ' .$id);
   if (!$stmt) {
      echo 'La supression n\'a pas fonctionnée';
      
   } else {
      echo "";
   }

   $pdo = null;
}

?>

