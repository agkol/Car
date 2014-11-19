<?php

include_once('RaceCarInterface.php') ;
include_once('car.php');
include_once('Engine.php');

class RaceCar extends car implements RaceCarInterface {

	private $VMax;
	private $Acceleration ;
	private $e ;

	public function RaceCar($b, $m, $c, $nod){

		parent::Car($b, $m, $c, $nod);

	}

	//$eng = new Engine(170) ;


	/*public function countVMax($eng->getHP()){

		$this->vMax=(($this->$eng->getHP())*2); 
	}*/

	public function countVMax(){

	}

	public function countAcceleration(){


	}

	public function getVMax(){

		return $this->VMax;
	}

	public function getAcceleration(){

		return $this->Acceleration;
	}
}

?>