<?php

declare(strict_types=1);

namespace Application\src\Adapter;

use Core\src\Interfaces\ModelInterface;

interface DatabaseAdapter
{
    public function connect(): void;

    public function disconnect(): void;

    public function save(ModelInterface $model): ModelInterface;
}
