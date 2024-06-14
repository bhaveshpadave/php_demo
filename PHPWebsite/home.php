<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is Homepage.
    <a href="index.php">Back</a>
    <table>
        <thead>
            <td><b>Key</b></td>
            <td><b>Value</b></td>
        </thead>
        <tbody>
            <?php foreach ($_SERVER as $key => $value) { ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value;?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>

<?php
    //echo $_SESSION["text"];
    //header("Location: index.php");
    session_destroy();
?>