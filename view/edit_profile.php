<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include 'header.php';
?>
<body>
    <h4>Edit Profile</h4>
    <form id="form_edit_profile">
        <p>Type new user nanem</p>
        <input type="text" name="user_name" name="new_user_name">
        <p>Type passowrd</p>
        <input type="password" name="password" name="user_password">
        <p>Type new password</p>
        <input type="password" name="password_new" name="new_user_password">
        <button type="submit" id="upgrade_data">Upgrade</button>
    </form>
</body>
<script src="../js/edit_profile.js"></script>
</html>