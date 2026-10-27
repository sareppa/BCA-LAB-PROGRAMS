<!DOCTYPE html>

<html>

<head>

    <title>Odd or Even</title>

</head>

<body>

<h2>Check Odd or Even Number</h2>

<form method="post">

    Enter a number:

    <input type="number" name="num" required>

    <input type="submit" value="Check">

</form>

<?php

if (isset($_POST['num'])) {

    $num = $_POST['num'];

    if ($num % 2 == 0) {

        echo "<h3>$num is an Even Number</h3>";

    } else {

        echo "<h3>$num is an Odd Number</h3>";

    }

}

?>

</body>

</html>