<?php
require_once "./src/models/Base.php";
require_once "./src/models/User.php";

$conn = new PDO('mysql:host=127.0.0.1;dbname=eshop-app', 'root', '123456@Abc');

$query = 'SELECT * FROM users';

$result = $conn->query($query);
$data = $result->fetchAll();
$users = [];

foreach ($data as $item) {
    $user = new \src\Model\User($item['name'], $item['email'], $item['phone'], $item['id']);
    $users[] = $user;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<h2>Danh sach nguoi dung</h2>
<a href="view/add.php">ADD</a>
<table>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td></td>
    </tr>

    <?php foreach($users as $index => $user) { ?>
       <tr>
           <td><?php echo $index + 1 ?></td>
           <td><?php echo $user->getName() ?></td>
           <td><?php echo $user->getEmail() ?></td>
           <td><?php echo $user->getPhone() ?></td>
           <td><a href="actions/delete.php?id=<?php echo $user->getId(); ?>">Delete</a></td>
       </tr>
    <?php  }  ?>
</table>

</body>
</html>