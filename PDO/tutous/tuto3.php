<?php

class Animal {
    public function faireDuBruit() {
        echo "The animal makes noise.\n";
    }
}

class Chien extends Animal {
    public function faireDuBruit() {
        echo "Ouaf !\n";
    }
}



$animaux = [new Chien(), new Animal()];

foreach ($animaux as $animal) {
    $animal->faireDuBruit();
}
 