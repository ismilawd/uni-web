<?php
    session_start();
?>

<?php
    if(@$_SESSION["username"])
    {
        echo "username:".$_SESSION["username"];
        echo "<br/>";
    }
    if(@$_SESSION["password"])
    {
        echo "password:".$_SESSION["password"];
    }
?>