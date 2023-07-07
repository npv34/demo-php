<?php
namespace src\Controller;

use src\Class\User;
use src\Model\UserModel;

class UserController
{
    private $userModel;
    function __construct(public array $users = []) {
        $this->userModel = new UserModel();
    }


    function getAll(): void
    {
        $data = $this->userModel->getAllUsers();
        $users = [];

        foreach ($data as $item) {
            $user = new User($item['name'], $item['email']);
            $user->setId($item['id']);
            $users[] = $user;
         }

        include_once "./view/list.php";
    }

    function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "./view/add.php";
        }  else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->userModel->store($name, $email, $password);
            header('Location: index.php?page=users&action=show-list');
        }
    }

    function delete($id): void
    {
        $this->userModel->destroy($id);
        header('Location: index.php?page=users&action=show-list');
    }
 }