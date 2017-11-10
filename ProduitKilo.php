<?php

require_once('Produit.php');

class ProduitKilo extends Produit {
	
	public $prix;
	
	public function __construct($prix, $poids) {
		$this->prix=$prix;
		$this->poids=$poids;
	}
	
	public function Calcul() {
		return ($this->prix*$this->poids);
	}
}

?>