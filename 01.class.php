<?php

// Las clases son declaradas mediante la palabra reservada class
class Customer {
    // *** 
    /// Modificadores de acceso
    // ***
    
    // public :: Permite el acceso al contenido de la clase desde fuera de esta
    public $name = 'Martin';

    // private :: El contenido de la clase solo podra ser accesido desde dentro de esta
    private $id = 1;

    // protected :: El contenido de la clase podra ser accedido desde dentro de la clase misma o desde una clase heredada
    protected $email = 'martin@mail.com';
}