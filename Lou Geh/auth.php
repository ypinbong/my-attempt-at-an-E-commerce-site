<?php

session_start();

include('db/db_connect.php');

$username = ""; 
$_SESSION['success'] = "";
$errors = array();

if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error = "Username or password is invalid";
    }else{
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if($password != $password2){
            //header("Location: newcategory.php?msg=" . urlencode('Incorrect information! Please try again'));
            echo '<script>alert("Incorrect information! Please try again")</script>';
        }

        $search = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username'
        AND password='$password'");

        $rows = mysqli_num_rows($search);
        if($rows == 1){

            $_SESSION['username'] = $username;

            $_SESSION['success'] = "You have logged in!";

            header("Location: index_User.php");
        }

    }
}

?>