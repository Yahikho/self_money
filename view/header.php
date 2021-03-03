<?php
    session_start();
    if(isset($_POST['signOut'])){
        unset($_SESSION['user_name']);
        header('Location: ../sign_in.php');
    }else{
        header('Location: ../sign.php');
    }
?>
<?php if(isset($_SESSION['user_name'])){?>
<header>
<form action="../sign_in.php" method="POST">
    <p><span><?=$_SESSION['user_name']?></span></p>
    <button type="submit" name="signOut"></button>
</form>
</header>
<?php }else 
    header('Location: ../sign_in.php');
?>