<?php
include_once('car.php');
include_once('RaceCar.php');

//$car=new Car();
//echo $car->helloCar();

function introduceCar(Car $c){

	echo "Hello! It's me - your car : ".$c->getColor()." ".$c->getBrand()." ".$c->getModel()." ".$c->getNumberOfDoors()."\n";
}

//$agaCar = new Car("126p", "Fiat", "green", 3) ;
$myCar = new Car("Skoda", "Fabia", "silver", 5) ;
$otherCar = new Car("FSO", "Polonez", "silver", 5) ;

echo $myCar->helloCar() ;
echo $otherCar->helloCar() ;

echo $otherCar->getColor()."\n" ;
$otherCar->setColor("Pink") ;
echo $otherCar->helloCar() ;

//introduceCar($agaCar) ;

$raceCar = new RaceCar("126p", "Fiat", "green", 3) ;
introduceCar($raceCar) ;

?>