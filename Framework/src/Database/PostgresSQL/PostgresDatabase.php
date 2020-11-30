<?php

declare(strict_types=1);

namespace Framework\src\Database\PostgresSQL;

use Core\src\User\Model\UserModel;

class PostgresDatabase implements \Application\src\User\Adapter\DatabaseAdapter
{
    public function connect(): void
    {
        echo 'Connected to PostgreSQL Database!' . PHP_EOL;
    }

    public function disconnect(): void
    {
        echo 'Disconnected to PostgreSQL Database!' . PHP_EOL;
    }

    public function save(UserModel $user): UserModel
    {
        echo 'User saved!' . PHP_EOL;
        return $user;
    }
}