<?php
  
    session_start();
    if(isset($_POST['signOut'])){
        unset($_SESSION['user_name']);
        header('Location: sign_in.php');
    }
?>
<?php
    if(isset($_SESSION['user_name'])){
?>
<link rel="stylesheet" href="../css/header.css">
<header>
<form action="" method="POST" class="form_header" >
    <p><span><?=$_SESSION['user_name']?></span></p>
    <button type="submit" name="signOut">Sign Out</button>
</form>
</header>
<?php
}else{
    header('Location: sign_in.php');
}
?>