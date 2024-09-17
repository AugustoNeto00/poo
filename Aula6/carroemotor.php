<?php
class Motor{
	public $horsep;
    function __construct($horsep){
        $this->horsep = $horsep;
    }
}
class Car{
    public $model;
    public $motor;
    function __construct($model, $motor){
    	$this->model = $model;
    	$this->motor = $motor;
    }
    function showDetails(){
    	$model = $this->model;
    	echo "Este é o modelo: ". $model. ". e ele tem: ". $this->motor->horsep. " de pontência.";
    }
}
$motor = new Motor(30000);
$car = new Car("Jeep Compass", $motor);
$car->showDetails();