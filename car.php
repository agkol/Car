<?php

include_once('carInterface.php');

class Car implements CarInterface{

	private $brand;
	private $color;
	private $model;
	private $numberOfDoors;

	/*public function Car(){
		$this->brand="Ford";
		$this->color="Red";
		$this->model="Fiesta";	
		$this->numberOfDoors="5" ;
	}*/

	public function Car($b, $m, $c, $nod){
		$this->brand=$b;
		$this->model=$m;
		$this->color=$c;	
		$this->numberOfDoors=$nod ;
	}
	
	public function helloCar(){

	return "Hello! It's me - yout car : ".$this->color." ".$this->brand." ".$this->model." ".$this->numberOfDoors."\n";
	}

	public function getBrand(){
		return $this->brand;	
	}
	public function setBrand($brand){
		$this->brand=$brand;	
	}
	
	public function getModel(){
		return $this->model;	
	}
	public function setModel($model){
		$this->model=$model;	
	} 
	
	public function getColor(){
		return $this->color;	
	}
	public function setColor($color){
		$this->color=$color;	
	}
	
	public function getNumberOfDoors(){
		return $this->numberOfDoors;	
	}
	public function setNumberOfDoors($model){
		$this->numberOfDoors=$numberOfDoors;	
	} 


}

?>
