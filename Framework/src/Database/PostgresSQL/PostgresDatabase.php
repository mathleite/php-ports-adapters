<?php

declare(strict_types=1);

namespace Framework\src\Database\PostgresSQL;

use Application\src\Adapter\DatabaseAdapter;
use Core\src\Interfaces\ModelInterface;

class PostgresDatabase implements DatabaseAdapter
{
    public function connect(): void
    {
        echo 'Connected to PostgreSQL Database!' . PHP_EOL;
    }

    public function disconnect(): void
    {
        echo 'Disconnected to PostgreSQL Database!' . PHP_EOL;
    }

    public function save(ModelInterface $model): ModelInterface
    {
        echo 'User saved!' . PHP_EOL;
        return $model;
    }
}
