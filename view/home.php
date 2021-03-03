<?php

    session_start();
    if(isset($_POST['cerrar'])){
        unset($_SESSION['user_name']);
        header('Location: sign_in.php');
    }

    echo $_SESSION['user_name'];
?>

<?php if(isset($_SESSION['user_name'])){?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>Welcome hp</p>
    <form action="" method="POST">
        <button type="submit" name="cerrar" >Cerrar</button>
    </form>
</body>
</html>
<?php }else{
    header('Location: sign_in.php');
}
?>