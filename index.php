<?php

declare(strict_types=1);

use classes\Argon2;
use classes\Bar;
use classes\Calculate;
use classes\CoalescingOperator;
use classes\Employee;
use classes\IsCountable;
use classes\KeyArray;
use classes\Token;

require_once __DIR__ . '/vendor/autoload.php';

//1
$emp = new Employee(4);
echo var_dump($emp->getId());
//2
$calc = new Calculate();
var_dump($calc->getSum(1, 2));
//3
$tok = new Token();

//4
$argon2 = new Argon2();
$argon2->setPass("abra");
$argon2->hashPasswordArgon();
echo $argon2->pass;
//5
$var = new IsCountable();
$one[] = 1;
$var->isCountableVar($one);
//6
$keyArr = new KeyArray();
$k = $keyArr->getFirstKey($one);
echo $k;
//7
$bar = new Bar("VodkaGrill", 50);


