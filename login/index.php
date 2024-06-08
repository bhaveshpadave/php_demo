<?php
    include ('include/autoloader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blog</title>
</head>
<body>
    <header>
        <nav>
            <h1><b>The Blog</b></h1>
        </nav>
    </header>
    <main>
        <h3>Sign-up</h3>
        <div>
            <form action="classes/LoginController.php" method="post">
                <input name="email" type="email" required>
                <input name="password" type="password">
                <input type="submit">
            </form>
        </div>
    </main>
    <footer></footer>
</body>
</html>