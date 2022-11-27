<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/shop.css">
    <title><?=$title?></title>
</head>
<body>
    <nav>
        <header>
            <h1>Shop Database</h1>
        </header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="categories.php">Categories</a></li>
            <?php if(!$loggedIn): ?>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
            <?php else:?>
            <li><a href="logout.php">Logout</a></li>
            <?php endif ?>
        </ul>
    </nav>

    <main>
        <?=$output?>
    </main>

    <footer>
        &copy; eshoping <?php echo date('Y')?>
    </footer>
</body>
</html>