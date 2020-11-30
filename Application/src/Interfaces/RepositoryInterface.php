<?php

declare(strict_types=1);

namespace Application\src\Interfaces;

use Core\src\Interfaces\ModelInterface;

interface RepositoryInterface
{
    public function save(ModelInterface $user): ModelInterface;
}
