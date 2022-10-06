<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>zazoutatoo</title>

</head>
<header>
<nav>
    <li>
    <button><a href="index.php?route=home">Home</a></button>
    </li>
    <li>
    <button><a href="index.php?route=carrousel">carrousel</a></button>
    </li>
    <li>
    <button><a href="index.php?route=form">form</a></button>
    </li>
    <li>
    <button><a href="index.php?route=mozaike">mosaike</a></button>
    </li>
    <li>
    <button><a href="index.php?route=bio">bio</a></button>
    </li>
    <li>
    <a href="index.php?route=notfound">notfound</a>
    </li>
</nav>
</header>
<body>
    <?php require 'router.php'?> 
</body>
</html>