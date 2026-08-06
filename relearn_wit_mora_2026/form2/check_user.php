<?php

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    require 'connect.php';

    $select="select * from users where username='$username' and password='$password'";
    $query= mysqli_query($conn, $select);

    if(mysqli_num_rows($query)>0){
        header("location:home.php");
    } else {
        echo "wrong ";
    }
}


?>