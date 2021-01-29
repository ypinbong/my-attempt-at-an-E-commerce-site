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
            <li><input type="submit" name="logout" value="Logout"></input></li>
            <li><a href="#" class="fa fa-shopping-cart" style="font-size:36px"></a></li>
        </ul>
        </nav>
    </header>

    <div class="banner">
        <h1>We may not have</h1>
        <h2>everything</h2>
        <h1>But we might just have the THING</h1>
        <h1>for YOU!</h1>
        <a href="shop.php"><button>SHOP NOW</button></a>
    </div>

</body>

<footer>
Copyright &copy; 2019 Yong Pin L. Bong
</footer>

</html>