<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app/css/styles.css" rel="stylesheet">
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
			<li><a href="index.php">Home</a></li>
			<li><a href="sign-in.php">Shop</a></li>
            <li><a href="suppliers.php">Suppliers</a></li>
            <li><a href="sign-in.php">Sign-in</a></li>
            <li><a href="sign-up.php">Sign-up</a></li>
            <li><a href="#" class="fa fa-shopping-cart" style="font-size:36px"></a></li>
        </ul>
        </nav>
    </header>
    <div class="container">
        <h1>YOU'RE NEARLY THERE!</h1>
        <form method="post" action="add_User.php">
            <input type="text" name="first_Name" placeholder="First name..." required>
            <input type="text" name="last_Name" placeholder="Last name..." required>
            <input type="text" name="address" placeholder="Address..." required>
            <input type="text" name="customerNum" placeholder="Contact no..." required>
            <input type="text" name="username" placeholder="Username..." required>
            <input type="password" name="password" placeholder="Password..." required>
            <input type="submit" name="submit" value="REGISTER">
        </form>
    </div>
</body>
<footer>Copyright &copy; 2019 Yong Pin L. Bong</footer>
</html>