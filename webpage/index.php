<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<form action="sucker.php" method="post">
    <h1>Buy Your Way to a Better Education!</h1>

    <p>
        Recent changes in University of Washington policy, now allow us to offer grades for money. That's right! All you
        need to get a A in this course is cold, hard, cash.
    </p>

    <hr/>

    <h2>Give Us Your Money</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="username">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="section">
                <option selected disabled>(Select a section)</option>
                <option value="MA">MA</option>
                <option value="MB">MB</option>
                <option value="MC">MC</option>
                <option value="MD">MD</option>
                <option value="MF">MF</option>
                <option value="MG">MG</option>
                <option value="MH">MH</option>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="Card">
            <br>
            <input type="radio" name="CreditCard" value="visa">Visa
            <input type="radio" name="CreditCard" value="masterCard">MasterCard
        </dd>


    </dl>

    <div>
        <input type="submit" value="I am a giant sucker."
    </div>
</form>
</body>
</html>