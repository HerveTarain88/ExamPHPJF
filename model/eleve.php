<?php 
class eleve {

private $id;
private $prenom;
private $nom;


public function __construct ($id, $prenom, $nom) {

	$this -> id = $id;
	$this -> prenom = $prenom;
	$this -> nom = $nom;
	
}

public function getPrenom () {
	return $this -> prenom;
}

public function getNom () {
	return $this -> nom;
}

public function getId () {
	return $this -> id;
}

}












?>