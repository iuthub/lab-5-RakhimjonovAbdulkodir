<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Recieved</title>
    <link href="./buyagrade.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php if ($_SERVER["REQUEST_METHOD"] != 'POST') { ?>
    <h2>This page only accepts POST requests</h2>
<?php } else {
    if (empty($_REQUEST["username"])) {
        header("Location:sorry.php");
    } else if (empty($_REQUEST["section"])) {
        include("sorry.php");
    } else if (empty($_REQUEST["Card"])) {
        include("sorry.php");
    } else if (empty($_REQUEST["CreditCard"])) {
        include("sorry.php");
    }?>

    <h1>Thanks, sucker!</h1>
    <p>Your information has been recorder.</p>
    <?php
    $username = $_REQUEST["username"];
    $section = $_REQUEST["section"];
    $card = $_REQUEST["Card"];
    $CreditCard = $_REQUEST["CreditCard"];
    ?>
    <dl>
        <dt>Name</dt>
        <dd>
            <?= $username ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $section ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= $card ?>
            ( <?= $CreditCard ?> )
        </dd>
    </dl>

    <p>Here are all the suckers who have submitted here:</p>

    <pre><?php

        if (!empty($_REQUEST["username"])) {
            $username = $_REQUEST['username'];
        } else {
            $username = "Name is not submitted ! ";
        }

        if (!empty($_REQUEST["section"])) {
            $section = $_REQUEST['section'];
        } else {
            $section = "Section is not submitted ! ";
        }

        if (!empty($_REQUEST["Card"])) {
            $card = $_REQUEST['Card'];
        } else {
            $card = "Card number is not submitted ! ";
        }

        if (!empty($_REQUEST["CreditCard"])) {
            $CreditCard = $_REQUEST['CreditCard'];
        } else {
            $CreditCard = "Type of Credit card is not submitted ! ";
        }



        $suckers = fopen('suckers.txt', 'a+');
        fwrite($suckers, "{$username};{$section};{$card}; {$CreditCard}; \n");
        fclose($suckers);
        $suckers = fopen('suckers.txt', 'r');
        while (!feof($suckers)) {
            $line = fgetc($suckers);
            echo $line;
        }
        fclose($suckers);
        ?></pre>


<?php } ?>

</body>
</html>