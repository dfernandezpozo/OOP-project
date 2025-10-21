# OOP.PHP

  

This document describes the implementation of a `Car` class in PHP, showing its attributes, methods, and usage examples.

  

---

  

## 1. Constructor and Attributes

  

The `Car` class contains the basic attributes of a car and methods to interact with them.

  

```php

class  Car {

public  $brand; 

public  $model; 

public  $year; 

public  $actualSpeed; 
}
```
## 2. Getters
```php
function  get_brand() {

return  $this->brand;

}

function  get_model() {

return  $this->model;

}

function  get_year() {

return  $this->year;

}

function  get_actualSpeed() {

return  $this->actualSpeed;

}
``` 
## 3. Setters
```php

function  set_brand($brand) {

$this->brand = $brand;

}

function  set_model($model) {

$this->model = $model;

}

function  set_year($year) {

$this->year = $year;

}

function  set_actualSpeed($actualSpeed) {

$this->actualSpeed = $actualSpeed;

}
```
## 4. Accelerate method
```php

function  accelerate($actualSpeed) {

$this->actualSpeed += $actualSpeed;

}
```
## 5. Deccelerate method
```php

function  deccelerate($actualSpeed) {

$this->actualSpeed -= $actualSpeed;

}
```
## 6. Details method
```php

function  details() {

return  "Brand: "  .  $this->brand  .  "\n"  .

"Model: "  .  $this->model  .  "\n"  .

"Year: "  .  $this->year  .  "\n"  .

"Actual Speed: "  .  $this->actualSpeed;

}
```
## Car with accelerate method
```php

$car = new  Car();

$car->set_brand("Opel");

$car->set_model("Corsa");

$car->set_year("2017");

$car->set_actualSpeed(140);

$car->accelerate(100);
```
## Showing car using details()
```php
echo  $car->details() ."\n"."\n";
```
## Car2 with deccelerate method
```php
$car2 = new  Car();

$car2->set_brand("Nissan");

$car2->set_model("Sandero");

$car2->set_year("2000");

$car2->set_actualSpeed(200);

$car2->deccelerate(100);
```
## Showing car2
```php
echo  $car2->details();
```


