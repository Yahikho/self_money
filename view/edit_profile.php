<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <title>Edit Profile</title>
</head>
<?php
    include 'header.php';
?>
<body>
<div class="form-home">
    <h3 class="title-form">Edit Pofile</h3>
        <form id="formEditProfile" class="form-basic">
            <p class="data-user">New User Name</p>
            <input type="text" name="new_user_name" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();" value="<?=$_SESSION['user_name']?>">
            <p class="data-user">New Password</p>
            <input type="password" name="new_user_password" maxlength="20" >
            <p class="data-user">Password</p>
            <input type="password" name="user_password" maxlength="20" >
            <button class="btnCommon" id="btnSingUp" type="submit">Upgrade</button>
        </form>
        <div class="messages_">
            <p id = "message"></p>
        </div>
    </div>
</body>
<script src="../js/edit_profile.js"></script>
</html>