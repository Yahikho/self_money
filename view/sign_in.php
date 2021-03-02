<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <title>Sign In</title>
</head>
<body>
    <div class="form-home">
        <h3 class="title-form"> Sign In</h3>
        <form id="formSignin" class="form-basic">
            <p class="data-user">User Name</p>
            <input type="text" name="user_name" maxlength="20" onkeyup="javascript:this.value=this.value.toLowerCase();" >
            <p class="data-user">Password</p>
            <input type="password" name="user_password" >
            <button class="btnCommon" id="btnSingUp" type="submit">Sing In</button>
        </form>
        <div class="messages_">
            <p id = "message"></p>
        </div>
        <p class="acount"> don't have an account?<a href="sign_up.php"> Sign Up</a><p>
    </div>
</body>
<footer>
    <script src="../js/sign_in.js"></script>
</footer>
</html>