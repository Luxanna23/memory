<?php session_start();
require('card.php');

if (!isset($card)) {
    for ($i = 1; $i < 10; $i++) {
        $card[$i] = new Card();
        $card[$i]->setId($i);
        $card[$i]->setImage("image/" . $i . ".jpg");
        // $card[$i]->setState("hide");
        $card[$i+9] = new Card();
        $card[$i+9]->setId($i+9);
        $card[$i+9]->setImage("image/" . $i . ".jpg");
    }
    //shuffle($card);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>memory</title>
</head>
<body>
    <?php include("header.php"); ?>
    <main>
        <table>
            <form method="get">
                <!--Génération du tableau-->
                <?php

                foreach ($card as $key => $value) {
                    if (isset($_SESSION['card' . $key])) {
                        $card[$key]->setState('visible');
                        echo '<tr><input type="submit" name="' . 'card' . $key . 'visible"> <img height="100px" src="' . $card[$key]->getImage() . '">' . '</input></tr>';
                    } else {
                        if (isset($_GET['card' . $key])) {
                            if ($_GET['card' . $key] == "Envoyer") {
                                $_SESSION['card' . $key] = $_GET['card' . $key];
                                //header('location:index');
                            }
                        }
                       echo '<tr><input type="submit" name="' . 'card' . $key . '"> <img height="100px" src="image/back.jpg">' . '</input></tr>';
                    }
                }
                ?>
                <div>
                <button class="button" type="submit" name="reset" value="reset">Reinitialiser la partie</button>
                </div>
                <?php
                resetGame();
                function resetGame()
                {
                    if (isset($_GET['reset'])) {
                        session_unset();
                        session_destroy();
                        unset($_GET);
                        //header('location:index');
                    }
                }
                // var_dump($card);
                // var_dump($_GET);
                // //unset($_GET);
                // //session_destroy();
                // var_dump($_SESSION);
                ?>
            </form>
        </table>
    </main>
</body>
</html>