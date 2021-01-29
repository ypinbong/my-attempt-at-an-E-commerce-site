<?php

include_once 'db/db_connect.php';

if(isset($_POST['submit'])){

    $product_Name=filter_input(INPUT_POST, 'product_name');
    $description=filter_input(INPUT_POST, 'description');
    $quantity=filter_input(INPUT_POST, 'quantity');
    $price=filter_input(INPUT_POST, 'price');
    $supplierId=filter_input(INPUT_POST, 'supplierId');

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg', 'png', 'pdf', 'svg', 'string', 'int');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 100000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                // header("Location: upload_UI.php?uploadsuccess");

                if(mysqli_connect_error()){
                    die('Connection Error ('.mysqli_connect_error().')'
                    .mysqli_connect_error());
                }else{
                    $sql = "INSERT INTO customer (product_name, description, quantity,
                    price, supplierId, image)
                    VALUES ('$product_name', '$description', '$quality', '$price',
                    '$supplierId', '$fileNameNew')";
            
                
                }
            }else{
                echo "You're file is too big";
            }
        }else{
            echo "There was an error uploading";
        }
    }else{
        echo "You cannot upload this type of data";
    }
}