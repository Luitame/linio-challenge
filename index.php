<?php

require_once __DIR__ . "/vendor/autoload.php";

use Linio\ItValidator;
use Linio\LinianosValidator;
use Linio\LinioValidator;

$linianos = new LinianosValidator();
$linio = new LinioValidator();
$it = new ItValidator();

$messages = [ItValidator::class => 'IT', LinioValidator::class => 'Linio', LinianosValidator::class => 'Linianos'];

foreach (range(1, 100) as $number) {
    foreach ([$linianos, $linio, $it] as $validator) {
        if ($validator->isValid($number)) {
            print $messages[get_class($validator)] . PHP_EOL;
            break;
        }
    }
}
