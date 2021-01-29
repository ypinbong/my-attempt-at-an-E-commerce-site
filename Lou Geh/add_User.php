<?php

include_once 'db/db_connect.php';

$first_Name=filter_input(INPUT_POST, 'first_Name');
$last_Name=filter_input(INPUT_POST, 'last_Name');
$address=filter_input(INPUT_POST, 'address');
$customerNum=filter_input(INPUT_POST, 'customerNum');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');

if(isset($_POST['submit'])){
    if(mysqli_connect_error()){
        die('Connection Error ('.mysqli_connect_error().')'
        .mysqli_connect_error());
    }else{
        $sql = "INSERT INTO customer (first_Name, last_Name, address,
        customerNum, username, password)
        VALUES ('$first_Name', '$last_Name', '$address', '$customerNum',
        '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: sign-in2.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    }
} 

?>