<?php

declare(strict_types=1);

use classes\Argon2;
use classes\Calculate;
use classes\CoalescingOperator;
use classes\Employee;
use classes\IsCountable;
use classes\KeyArray;
use classes\Token;

require_once __DIR__ . '/vendor/autoload.php';


$emp = new Employee(4);

echo var_dump($emp->getId());

$calc = new Calculate();
var_dump($calc->getSum(1, 2));

$tok = new Token();


$argon2 = new Argon2();
$argon2->setPass("abra");
$argon2->hashPasswordArgon();
echo $argon2->pass;

$var = new IsCountable();
$one[] = 1;
$var->isCountableVar($one);

$keyArr = new KeyArray();
$k = $keyArr->getFirstKey($one);
echo $k;

