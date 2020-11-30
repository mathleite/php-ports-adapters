<?php

require_once 'vendor/autoload.php';

$database = new \Framework\src\Database\PostgresSQL\PostgresDatabase();
$repository = new \Application\src\User\Repository\UserRepository($database);
$controller = new \Framework\src\User\Controller\UserController($repository);
$user = new \Core\src\User\Model\UserModel('Matheus - TG');

echo PHP_EOL . $controller->create($user) . PHP_EOL;
