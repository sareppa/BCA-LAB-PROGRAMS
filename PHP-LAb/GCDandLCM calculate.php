<!DOCTYPE html>
<html>
<head>
    <title>GCD and LCM Calculator</title>
</head>

<body>

<h2>GCD and LCM Calculator</h2>

<form method="POST">

    Enter first number:
    <input type="number" name="num1" required>
    <br><br>

    Enter second number:
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" name="calculate" value="Calculate">

</form>

<?php

if (isset($_POST['calculate']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $a = abs($num1);
    $b = abs($num2);

    while ($b != 0)
    {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    $gcd = $a;

    if ($gcd != 0)
        $lcm = abs($num1 * $num2) / $gcd;
    else
        $lcm = 0;

    echo "<h2>Result</h2>";

    echo "GCD of $num1 and $num2 = $gcd <br>";

    echo "LCM of $num1 and $num2 = $lcm";
}

?>

</body>
</html>