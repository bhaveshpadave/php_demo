<?php 
    include ('includes/autoloader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
    // session_start();
    // $_SESSION["text"] = null;

    // $obj = new Product();
    // $obj->setColor('red');
    // //var_dump($obj); 
    
    // $testObj = new DbDemo();
    // $testObj->getData();

    if (isset($_POST["text"])) {
        echo $_POST["text"];
        header("Location: home.php");
    }

    

?>

<body>
    <form action="index.php" method="post">
        <input type="text" name="text">
        <input type="submit" value="submit">
    </form>
</body>
</html>