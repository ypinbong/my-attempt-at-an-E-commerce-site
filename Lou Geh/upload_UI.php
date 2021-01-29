<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Images to Database</title>

    <style>
        body{
            max-width: 350px;
            text-align: center;
            font-size: 30px;
            outline: none;
        }
    </style>
</head>
<body>

    <form action="upload_process.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="text" name="product_name" placeholder="Product Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="text" name="quantity" placeholder="Quantity" required>
        <input type="text" name="price" placeholder="Price" required>
        <input type="text" name="supplierId" placeholder="Supplier ID" required>
        <input type="file"  name="file">
        <input type="submit" name="submit" value="Upload"></input>

    </form>

</body>
</html>