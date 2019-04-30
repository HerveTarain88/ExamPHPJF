<?php 
class Ticket {

private $id;
private $idEleve;
private $idRaison;
private $idFormateur;
private $idUrgent;



public function __construct ($id, $idEleve, $idRaison, $idFormateur, $idUrgent) {

	$this -> id = $id;
	$this -> idEleve = $idEleve;
	$this -> idFormateur = $idFormateur;
	$this -> idRaison = $idRaison;
	$this -> idUrgent = $idUrgent;

}

public function getId () {
	return $this -> id;
}

public function getIdEleve() {
	return $this -> idEleve;
}

public function getIdRaison() {
	return $this -> idRaison;
}

public function getIdFormateur() {
	return $this -> idFormateur;
}

public function getIdUrgence() {
	return $this -> idUrgent;
}



}












?>