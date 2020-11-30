<?php

declare(strict_types=1);

namespace Application\src\User\Repository;

use Core\src\User\Model\UserModel;

interface UserRepositoryInterface
{
    public function save(UserModel $user): UserModel;
}
