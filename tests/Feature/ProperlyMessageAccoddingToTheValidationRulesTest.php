<?php

declare(strict_types=1);

namespace Feature;

use PHPUnit\Framework\TestCase;
use Linio\ItValidator;
use Linio\LinianosValidator;
use Linio\LinioValidator;

class ProperlyMessageAccoddingToTheValidationRulesTest extends TestCase
{
    public function testTheMultiplesBetweenOneAndFifteen(): void
    {
        $numbers = range(1, 15);

        $linianos = new LinianosValidator();
        $linio = new LinioValidator();
        $it = new ItValidator();

        $messages = [ItValidator::class => 'IT', LinioValidator::class => 'Linio', LinianosValidator::class => 'Linianos'];

        $results = [];
        foreach (range(1, 15) as $number) {
            foreach ([$linianos, $linio, $it] as $validator) {
                if ($validator->isValid($number)) {
                    $results[] = $messages[get_class($validator)];
                    break;
                }
            }
        }

        $this->assertEquals(['Linio', 'IT', 'Linio', 'Linio', 'IT', 'Linio', 'Linianos',], $results);
    }
}