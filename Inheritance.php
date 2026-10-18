<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Fahreza";
$manager->sayHello("Sekar");

$vp = new VicePresident();
$vp->name = "Ayu";
$vp->sayHello("Eja");