<?php

declare(strict_types=1);

namespace Application\src\User\Repository;

use Core\src\Interfaces\ModelInterface;

interface UserRepositoryInterface
{
    public function save(ModelInterface $user): ModelInterface;
}
