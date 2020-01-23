<?php

declare(strict_types=1);

namespace Linio;

use Linio\Contracts\ValidatorInterface;

class LinianosValidator implements ValidatorInterface
{
    public function isValid(int $number): bool
    {
        return $number % 3 == 0 && $number % 5 == 0;
    }
}