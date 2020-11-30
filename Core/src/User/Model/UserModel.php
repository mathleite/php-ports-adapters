<?php

declare(strict_types=1);

namespace Core\src\User\Model;

use Core\src\Interfaces\ModelInterface;

class UserModel implements ModelInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
