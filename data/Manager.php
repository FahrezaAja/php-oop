<?php

class Manager 
{
    var string $name;
    function sayHello(string $name) : void
    {
        echo "Hi $name, My Name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name) : void //jika ini dihapus maka akan memanggil function sayHello di class Manager, dan ini adalah contoh dari function overriding. jadi ketika kita membuat object dari class VicePresident maka akan memanggil function sayHello di class VicePresident, dan jika tidak ada maka akan memanggil function sayHello di class Manager.
    {
        echo "Hi $name, My Name is VP $this->name" . PHP_EOL;
    }
}