<?php

declare(strict_types=1);

namespace Application\src\User\Repository;

use Application\src\Interfaces\RepositoryInterface;
use Application\src\Adapter\DatabaseAdapter;
use Core\src\Interfaces\ModelInterface;

class UserRepository implements RepositoryInterface
{
    private DatabaseAdapter $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;
    }

    public function save(ModelInterface $user): ModelInterface
    {
        $this->database->connect();
        $model = $this->database->save($user);
        $this->database->disconnect();

        return $model;
    }
}
