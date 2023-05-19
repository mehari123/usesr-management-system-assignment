<?php require_once('../includes/header.php') ?>

<h1>Add User</h1>

<form id="add-user-form" method="POST" action="add-user.php">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" id="mobile" required>
    </div>
    <button type="submit">Add User</button>
</form>

<?php require_once('../includes/footer.php') ?>
