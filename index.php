<?php

declare(strict_types=1);

use classes\Calculate;
use classes\CoalescingOperator;
use classes\Employee;
use classes\Token;

require_once __DIR__ . '/vendor/autoload.php';


$emp = new Employee(4);

echo var_dump($emp->getId());

$calc = new Calculate();
var_dump($calc->getSum(1, 2));

$tok = new Token();


