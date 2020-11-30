<?php

declare(strict_types=1);

namespace Application\src\User\Adapter;

use Core\src\User\Model\UserModel;

interface DatabaseAdapter
{
    public function connect(): void;

    public function disconnect(): void;

    public function save(UserModel $user): UserModel;
}
