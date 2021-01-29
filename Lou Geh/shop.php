<?php

include_once 'db/db_connect.php';

$query="SELECT * from products";
$result=mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="app/css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="app/css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="res/LGlogo.ico" />
    <title>Lou Geh Supermarket</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="res/LGlongLogo.png" alt="Lou Geh Logo"></a>
        </div>
        <nav>
        <ul class="nav_links">     
			<li><a href="index_User.php">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
            <li><a href="suppliers_User.php">Suppliers</a></li>
            <li><a href="#">Logout</a></li>
            <li><a href="#" class="fa fa-shopping-cart" style="font-size:36px"></a></li>
        </ul>
        </nav>
    </header>

    <section class="wrapper">
    <table>
            <tr>
                <h1>Lou Geh Supermarket</h1>
            </tr>
            <t>
                <th>image</th>
                <th>id</th>
                <th>product_name</th>
                <th>description</th>
                <th>quantity</th>
                <th>price</th>
            </t>

<?php
    while($rows=mysqli_fetch_assoc($result)){
?>

        <tr>
            <td><img src= uploads/<?php echo $row['image'];?> alt=" " height="75" width="75"></td>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['product_name']; ?></td>
            <td><?php echo $rows['description']; ?></td>
            <td><?php echo $rows['quantity']; ?></td>
            <td><?php echo $rows['price']; ?></td>
        </tr>
<?php
    }
?>

    </table>
    </section>

</body>

<footer>
Copyright &copy; 2019 Yong Pin L. Bong
</footer>

</html>