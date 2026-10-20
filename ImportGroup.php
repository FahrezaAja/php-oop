<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy}; //ini jika ingin melakukan import dengan banyak class sekaligus dengan menggunakan "{}"
use function Helper\{HelpMe as Help}; //ini jika ingin melakukan import dengan banyak function sekaligus dengan menggunakan "{}"

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

