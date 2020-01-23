<?php

declare(strict_types=1);

namespace Linio\Test;

use Linio\LinioValidator;
use PHPUnit\Framework\TestCase;

class LinioValidatorTest extends TestCase
{
    private $linioValidator;

    protected function setUp(): void
    {
        $this->linioValidator = new LinioValidator();

        parent::setUp();
    }

    function testWhenGivenAMultipleOfThreeIsMustBeValid(): void
    {
        $givenNumber = 6;

        $this->assertTrue($this->linioValidator->isValid($givenNumber), "The number {$givenNumber} is multiple of 3");
    }

    function testWhenGivenANonMultipleOfThreeIsMustBeInvalid(): void
    {
        $givenNumber = 7;

        $this->assertFalse($this->linioValidator->isValid($givenNumber), "The number {$givenNumber} isn\'t multiple of 3");
    }
}
