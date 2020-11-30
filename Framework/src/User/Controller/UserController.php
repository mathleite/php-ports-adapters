<?php

declare(strict_types=1);

namespace Framework\src\User\Controller;

use Application\src\Interfaces\RepositoryInterface;
use Core\src\Interfaces\ModelInterface;

class UserController
{
    private RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(ModelInterface $user): ModelInterface
    {
        return $this->repository->save($user);
    }
}
