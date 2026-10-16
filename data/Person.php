<?php

class Person 
{
    const AUTHOR = "Fahreza Mandala Putra";
    var string $name; //ini adalah properties
    var ?string $address = null; //ini tanda bahwa address boleh null
    var $country = "Indonesia"; //ini adalah default value

    function __construct(string $name, ?string $address){ //jadi ketika membuat construction, kita wajib mengisi semua parameter ketika memanggil menggunakan object. karena jika tidak memanggil maka akan error.
        $this->name = $name;
        $this->address = $address;

    }

    function sayHello (?string $name){

    if (is_null($name)){
        echo "Hi, my name is $this->name". PHP_EOL;
    } else {
        echo "Hi $name, my name is $this->name". PHP_EOL; //this-> name diambil dari properties name, sedangkan $name diambil dari parameter function sayHello
    }

    }

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct(){
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }

}