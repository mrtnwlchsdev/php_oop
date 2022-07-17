<?php

class Animal {
    public function bark() {
        echo 'Woof!';
    }
}

// Un objeto puede ser instanciado a partir de una clase mediante la palabra new
// Cada objeto de clase tendra acceso a los atributos y metodos de la misma 
$dog = new Animal;
$dog->bark();