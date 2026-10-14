<?php

class Person 
{
    var string $name; //ini adalah properties
    var ?string $address = null; //ini tanda bahwa address boleh null
    var $country = "Indonesia"; //ini adalah default value

    function sayHello (?string $name){

    if (is_null($name)){
        echo "Hi, my name is $this->name". PHP_EOL;
    } else {
        echo "Hi $name, my name is $this->name". PHP_EOL; //this-> name diambil dari properties name, sedangkan $name diambil dari parameter function sayHello
    }

    }

}