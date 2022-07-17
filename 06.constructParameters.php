<?php

/*
El metodo __construct puede recibir parametros, los cuales seran datos enviados a la clase durante la instanciacion de cada objeto
*/

class User {
    public

    function __construct($name,$age){
        $this->name = $name;
        $this->age  = $age;
    }
    
    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }
}

$u1 = new User('Martin',28);
echo $u1->getName();
echo $u1->getAge();