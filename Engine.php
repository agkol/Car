<?php

include_once('EngineInterface.php');

class Engine implements EngineInterface{

	private $HP ;

	public function Engine($h){

		$this->Hp=$h ;
	}

	public function getHP(){
		return $this->Hp;
	}
}

?>