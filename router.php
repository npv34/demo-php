<?php
require_once "./src/models/DBConnect.php";
require_once "./src/models/UserModel.php";
require_once "./src/class/User.php";
require_once "./src/controllers/UserController.php";

use src\Controller\UserController;

$userController = new UserController();

$page = $_GET['page'] ?? null;
$action = $_GET['action'] ?? null;

switch ($page) {
    case 'users':
        if ($action == 'show-list') {
            $userController->getAll();
        }
        if ($action == 'add') {
            $userController->add();
        }

        if ($action == 'delete') {
            $id = $_GET['id'];
            $userController->delete($id);
        }
        break;
    default:
        echo "404";
}

?>