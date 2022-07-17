<?php

// Para acceder a los atributos dentro de una clase se hace uso de la palabra clave this.

use Customer as GlobalCustomer;

class Customer {
    public 
    $id = 1;

    function get_id() {
        return $this->id;
    }
}

$c1 = new Customer;
echo $c1->get_id();