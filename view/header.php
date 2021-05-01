<?php
  
    session_start();
    if(isset($_POST['signOut'])){
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);
        header('Location: /profile/sign_in.php');
    }
    if(isset($_SESSION['user_name'])){
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="../css/header.css">
<header>
<form action="" method="POST" class="form_header" >
        <a class="back-home link-header" href="home.php">Home</a>
        <a class="edit-data link-header" href="edit_types.php">Edit Types</a>
        <button type="submit" name="signOut">Sign Out</button>
        <p class="user-name"><a href="/profile/edit_profile.php"><?=$_SESSION['user_name']?></a></p>
</form>
</header>
<?php
}else{
    header('Location: profile/sign_in.php');
}
?>