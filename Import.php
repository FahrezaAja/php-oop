<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1; //as adalah alias untuk membuat nama class menjadi berbeda agar tidak terjadi conflict
use Data\Two\Conflict as Conflict2;
use function Helper\HelpMe as Help;
use const Helper\APPLICATION as APP;

$conlict1 = new Conflict1();
$conlict2 = new Conflict2();

Help();
echo APP . PHP_EOL;