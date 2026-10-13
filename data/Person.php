<?php

class Person 
{
    var string $name; //ini adalah properties
    var ?string $address = null; //ini tanda bahwa address boleh null
    var $country = "Indonesia"; //ini adalah default value

    function sayHello (string $name){
        echo "Hello $name". PHP_EOL;
    }

}