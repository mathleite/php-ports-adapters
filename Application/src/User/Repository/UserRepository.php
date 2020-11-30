<?php

declare(strict_types=1);

namespace Application\src\User\Repository;

use Application\src\User\Adapter\DatabaseAdapter;
use Core\src\User\Model\UserModel;

class UserRepository implements UserRepositoryInterface
{
    private DatabaseAdapter $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;
    }

    public function save(UserModel $user): UserModel
    {
        $this->database->connect();
        $model = $this->database->save($user);
        $this->database->disconnect();

        return $model;
    }
}