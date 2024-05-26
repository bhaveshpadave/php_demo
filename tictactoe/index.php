<?php
    include("GameController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <style>
        body {
            background: darkkhaki;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        h1{
            text-align: center;
            font-size: 100px;
        }
        .play-area {
            margin-top: 5rem;
            display: flex;
            justify-content: center; /* Centers horizontally */
            align-items: center;
        }
        .row {
            /* margin: 0 20em 0 20em; */
            
            display: grid;
            grid-template-columns: 70px 70px 70px;
            text-align: center;
            /*grid-template-rows: 50px 50px 50px;*/
        }
        input[type = 'text'] {
            height: 50px;
            /* width: 50px; */
            font-size: 50px;
            text-align: center;
            background: darkkhaki;
        }
        .message{
            margin-top: 5rem;
            text-align: center;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <?php
        $winningMessage = "Hello";

        $b1 = $_POST["1"];
        $b2 = $_POST["2"];
        $b3 = $_POST["3"];
        $b4 = $_POST["4"];
        $b5 = $_POST["5"];
        $b6 = $_POST["6"];
        $b7 = $_POST["7"];
        $b8 = $_POST["8"];
        $b9 = $_POST["9"];

    if (
        $b3 == 'x' && $b5 == 'x' && $b7 == 'x' ||
        $b1 == 'x' && $b2 == 'x' && $b3 == 'x' ||
        $b4 == 'x' && $b5 == 'x' && $b6 == 'x' ||
        $b7 == 'x' && $b8 == 'x' && $b9 == 'x' ||
        $b1 == 'x' && $b4 == 'x' && $b7 == 'x' ||
        $b2 == 'x' && $b5 == 'x' && $b8 == 'x' ||
        $b3 == 'x' && $b6 == 'x' && $b9 == 'x' ||
        $b1 == 'x' && $b5 == 'x' && $b9 == 'x'
    ) {
        $winningMessage = 'X player won';
    } else if (
        $b3 == 'o' && $b5 == 'o' && $b7 == 'o' ||
        $b1 == 'o' && $b2 == 'o' && $b3 == 'o' ||
        $b4 == 'o' && $b5 == 'o' && $b6 == 'o' ||
        $b7 == 'o' && $b8 == 'o' && $b9 == 'o' ||
        $b1 == 'o' && $b4 == 'o' && $b7 == 'o' ||
        $b2 == 'o' && $b5 == 'o' && $b8 == 'o' ||
        $b3 == 'o' && $b6 == 'o' && $b9 == 'o' ||
        $b1 == 'o' && $b5 == 'o' && $b9 == 'o'
    ) {
        $winningMessage = 'O player won';
    } else {
        $winningMessage = 'Tie';
    }
    
    ?>
    <main>
        <header>
            <h1>Tic-Tac-Toe</h1>
        </header>
        <div class="play-area">
            <form action="index.php" method="post">
                <div class="row">
                    <input name="1" type="text" maxlength="1" pattern="[x,o]">
                    <input name="2" type="text" maxlength="1" pattern="[x,o]">
                    <input name="3" type="text" maxlength="1" pattern="[x,o]">
                    <input name="4" type="text" maxlength="1" pattern="[x,o]">
                    <input name="5" type="text" maxlength="1" pattern="[x,o]">
                    <input name="6" type="text" maxlength="1" pattern="[x,o]">
                    <input name="7" type="text" maxlength="1" pattern="[x,o]">
                    <input name="8" type="text" maxlength="1" pattern="[x,o]">
                    <input name="9" type="text" maxlength="1" pattern="[x,o]">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="message">
            <?php
            echo $winningMessage;
                // if(isset($winningMessage)) {
                //     echo $winningMessage;
                // }
            ?>
        </div>
    </main>
</body>
</html>






<!-- <div>
    <button name="btn" value="1" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="2" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="3" onclick="clickHandler()" type="submit">____</button>
</div>
<div>
    <button name="btn" value="4" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="5" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="6" onclick="clickHandler()" type="submit">____</button>
</div>
<div>
    <button name="btn" value="7" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="8" onclick="clickHandler()" type="submit">____</button>
    <button name="btn" value="9" onclick="clickHandler()" type="submit">____</button>
</div> -->