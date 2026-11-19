<!DOCTYPE html>

<html>

<head>

    <title>Dollar to Rupee Conversion</title>

</head>

<body>

<h2>Dollar to Rupee Converter</h2>

<form method="post">

    Enter Dollar Amount:

    <input type="number" name="dollar" step="0.01" required>

    <input type="submit" value="Convert">

</form>

<?php

if (isset($_POST['dollar'])) {

    // Get dollar amount

    $dollar = $_POST['dollar'];

    // Exchange rate

    $rate = 88;

    // Convert dollar to rupees

    $rupee = $dollar * $rate;

    // Display result

    echo "<h3>Dollar Amount = $" . $dollar . "</h3>";

    echo "<h3>Rupee Amount = ₹" . $rupee . "</h3>";

}

?>

</body>

</html>