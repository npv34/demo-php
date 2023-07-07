<h2>Danh sach nguoi dung</h2>
<a href="index.php?page=users&action=add">ADD</a>
<table class="table table-striped table-bordered">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td></td>
    </tr>

    <?php foreach($users as $key => $user) { ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $user->getName() ?></td>
            <td><?php echo $user->getEmail() ?></td>
            <td><a href="index.php?page=users&action=delete&id=<?php echo $user->getId() ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>