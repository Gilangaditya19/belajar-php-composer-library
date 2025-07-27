<?php

require_once __DIR__ . '/vendor/autoload.php';

use Study\BelajarPhpComposerLibrary\Customer;

$customer = new Customer('Gilang Aditya');
echo $customer->sayHello('Aditya');
