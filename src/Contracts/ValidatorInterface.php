<?php

declare(strict_types=1);

namespace Linio\Contracts;

interface ValidatorInterface
{
    public function isValid(int $number): bool;
}
