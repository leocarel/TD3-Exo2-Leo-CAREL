<?php

require_once('Produit.php');

class ProduitUnite extends Produit {
	
	public $prix;
	
	public function __construct($prix, $nombre) {
		$this->prix=$prix;
		$this->nombre=$nombre;
	}
	
	public function Calcul() {
		return ($this->prix*$this->nombre);
	}
}

?>