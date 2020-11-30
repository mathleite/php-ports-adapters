<?php

declare(strict_types=1);

namespace Core\src\Interfaces;

interface ModelInterface
{
    public function __construct(string $name);

    public function __toString(): string;
}
