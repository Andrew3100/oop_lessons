<?php

include 'classes/Class.php';

$user = new Automobile('Peugeot','Partner','Gray','France');

$user->AssignLease('Фуников Андрей Дмитриевич','01.01.2022','31.12.2022');


$user1 = new Truck('Peugeot','Partner','Gray','France','250 кг');

$user1->AssignLease('Фуников Андрей Дмитриевич','01.01.2022','31.12.2022');