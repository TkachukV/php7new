<?php

declare(strict_types=1);

use classes\Employee;

require_once __DIR__ . '/vendor/autoload.php';


$emp = new Employee(4);

echo var_dump($emp->getId());

