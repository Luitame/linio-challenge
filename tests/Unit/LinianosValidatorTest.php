<?php

declare(strict_types=1);

namespace Linio\Test;

use Linio\ItValidator;
use Linio\ValidatorInterfaceOfThree;
use Linio\ValidatorInterfaceOfThreeAndFive;
use PHPUnit\Framework\TestCase;

class LinianosValidatorTest extends TestCase
{
    private $linianosValidator;

    protected function setUp(): void
    {
        $this->linianosValidator = new ItValidator();

        parent::setUp();
    }

    function testWhenUsingANumberMultipleOfThreeAndFiveItMustBeValid(): void
    {
        $numerMultipleOfThreeAndFive = 30;

        $this->assertTrue($this->linianosValidator->isValid($numerMultipleOfThreeAndFive), "The {$numerMultipleOfThreeAndFive} number is multiple of 3 and 5");
    }

    function testWhenUsingANumberNonMultipleOfThreeAndFiveItMustBeInvalid(): void
    {
        $numerMultipleOfThreeAndFive = 31;

        $this->assertFalse($this->linianosValidator->isValid($numerMultipleOfThreeAndFive), "The {$numerMultipleOfThreeAndFive} number is not multiple of 3 and 5");
    }
}
