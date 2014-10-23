<?php

class Prices {

	private $totalPrice = 0;
	private $prices = array(
		'dobirka' => '40',
		'online' => '0',
		'postovne' => '65',
		'skladba' => '399',
		'typ_skladba' => '0',
		'typ_balicek' => '100',
	);
	
	public function getPrice($price){
		if(array_key_exists($price, $this->prices)){
			$this->totalPrice += $this->prices[$price];
			return $this->prices[$price];
		}
	}
	
	
	public function getTotalPrice(){
		return $this->totalPrice;
	}
}