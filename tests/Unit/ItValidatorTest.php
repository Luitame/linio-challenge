<?php

declare(strict_types=1);

namespace Linio\Test;

use Linio\ItValidator;
use Linio\ValidatorInterfaceOfThree;
use PHPUnit\Framework\TestCase;

class ItValidatorTest extends TestCase
{
    private $itValidator;

    protected function setUp(): void
    {
        $this->itValidator = new ItValidator();

        parent::setUp();
    }

    function testWhenUsingANumberMultipleOfFive(): void
    {
        $givenNumber = 10;

        $this->assertTrue($this->itValidator->isValid($givenNumber), "The number {$givenNumber} is multiple of 5");
    }

    function testUsingANonMultipleOfFive(): void
    {
        $givenNumber = 11;

        $this->assertFalse($this->itValidator->isValid($givenNumber), "The number {$givenNumber} isn\'t multiple of 5");
    }
}
