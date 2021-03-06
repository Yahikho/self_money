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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="../css/header.css">
<header>
<form action="" method="POST" class="form_header" >
        <a class="back-home" href="home.php">Home</a>
        <button type="submit" name="signOut">Sign Out</button>
        <p class="user-name"><a href="edit_profile.php"><?=$_SESSION['user_name']?></a></p>
</form>
</header>
<?php
}else{
    header('Location: sign_in.php');
}
?>