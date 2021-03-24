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
<?php } else { ?>

    <h1>Thanks, sucker!</h1>
    <p>Your information has been recorder.</p>

    <dl>
        <dt>Name</dt>
        <dd>
            <?= $_REQUEST["username"] ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $_REQUEST["section"] ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= $_REQUEST["Card"] ?>
            <?= $_REQUEST["CreditCard"] ?>
        </dd>

    </dl>

<?php } ?>


</body>
</html>