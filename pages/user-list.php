<?php
require_once('../includes/db.php');
require_once('../includes/header.php');

// Get all users from the database
$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll();

?>

<h1>User List</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Verified</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['mobile'] ?></td>
                <td><?php echo $user['verified'] ? 'Yes' : 'No' ?></td>
                <td>
                    <a href="edit-user.php?id=<?php echo $user['id'] ?>">Edit</a>
                    <a href="delete-user.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('../includes/footer.php') ?>
