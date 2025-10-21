<?php
// Attributes
class Car
{
    public $brand;
    public $model;
    public $year;
    public $actualSpeed;

    // getters
    function get_brand()
    {
        return  $this->brand;
    }
    function get_model()
    {
        return  $this->model;
    }
    function get_year()
    {
        return  $this->year;
    }
    function get_actualSpeed()
    {
        return  $this->actualSpeed;
    }

    // setters
    function set_brand($brand)
    {
        $this->brand = $brand;
    }
    function set_model($model)
    {
        $this->model = $model;
    }
    function set_year($year)
    {
        $this->year = $year;
    }
    function set_actualSpeed($actualSpeed)
    {
        $this->actualSpeed = $actualSpeed;
    }

    // Accelerate method
    function accelerate($actualSpeed)
    {

        $this->actualSpeed += $actualSpeed;
    }

    // Deccelerate method
    function deccelerate($actualSpeed)
    {
        $this->actualSpeed -= $actualSpeed;
    }

    // Details method
    function details()
    {
        return "Brand: " . $this->brand ."\n" . "Model: " . $this->model ."\n" . "Year: " . $this->year ."\n" . "Actual Speed: " . $this->actualSpeed;
    }
}

// Car Accelerating
$car = new Car();
$car->set_brand("Opel");
$car->set_model("Corsa");
$car->set_year("2017");
$car->set_actualSpeed(140);
$car->accelerate(100);

// Showing details car
 echo $car->details() ."\n"."\n";
 

 // Car deccelerating
$car2 = new Car();
$car2->set_brand("Nissan");
$car2->set_model("Sandero");
$car2->set_year("2000");
$car2->set_actualSpeed(200);
$car2->deccelerate(100);

// Showing details car2
echo $car2->details();
