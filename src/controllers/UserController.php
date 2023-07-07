<?php
namespace src\Controller;

class UserController
{
    function __construct(public array $users = []) {
    }

    function addUser($user): void
    {
        $this->users[] = $user; // push
    }

    function getList(): array {
        return $this->users;
    }
}