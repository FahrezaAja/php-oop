<?php

require_once "data/Person.php";

$person = new Person("Fahreza", "Merauke");
$person->name = "Sekar";

$person->sayHello("Fahreza");

$person->info();