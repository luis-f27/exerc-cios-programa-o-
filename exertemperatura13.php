<?php

class Temperatura {

    private $celsius;

    public function __construct($celsius){
        $this->celsius = $celsius;
    }

    public function paraFahrenheit(){
        return ($this->celsius * 9/5) + 32;
    }

    public function paraKelvin(){
        return $this->celsius + 273.15;
    }
}

$t1 = new Temperatura(0);
$t2 = new Temperatura(100);
$t3 = new Temperatura(37);

echo "0°C = " . $t1->paraFahrenheit() . "°F e " . $t1->paraKelvin() . "K<br>";

echo "100°C = " . $t2->paraFahrenheit() . "°F e " . $t2->paraKelvin() . "K<br>";

echo "37°C = " . $t3->paraFahrenheit() . "°F e " . $t3->paraKelvin() . "K<br>";

?>