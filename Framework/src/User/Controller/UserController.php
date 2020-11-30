<?php

declare(strict_types=1);

namespace Framework\src\User\Controller;

use Application\src\User\Repository\UserRepositoryInterface;
use Core\src\User\Model\UserModel;

class UserController
{
    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(UserModel $user): UserModel
    {
        return $this->repository->save($user);
    }
}
