<?php 
class raison {

private $id;
private $libelle;


public function __construct ($id, $libelle) {

	$this -> id = $id;
	$this -> libelle = $libelle;
	
}

public function getLibelle () {
	return $this -> libelle;
}

public function getId () {
	return $this -> id;
}

}












?>