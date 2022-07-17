<?php

// Una clase puede heradar el contenido de otra mediante la herencia

class User {
    public

    function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    function getData() {
        return "My name is $this->name and I'm $this->age years old";
    }
}

class Subscriber extends User {
    public 
    
    $plan;

    function  __construct($name,$email,$plan){
        parent::__construct($name,$email);
        $this->plan = $plan;
    }

    function getPlan() {
        return "$this->name: $this->plan";
    }
}

$s1 = new Subscriber('Martin','martin@mail.com','Basic Plan');
echo $s1->getPlan();