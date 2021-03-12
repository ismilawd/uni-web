<?php
    session_start();

    $user=$_POST['username'];
    $pass=$_POST['password'];

    require_once('../../includes/config.php');
    $sql="SELECT password FROM users where username='".$user."' AND password='".$pass."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$user;
        header('location:../../admin/index.php');
    }
    else{
        header('location:../../login.php');
    }
?>

