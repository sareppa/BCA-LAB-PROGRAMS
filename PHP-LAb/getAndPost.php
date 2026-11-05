<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

<h2>Student Result</h2>

<form method="post">
    Enter number of students:
    <input type="number" name="n" min="1" required>
    <input type="submit" name="submit" value="Enter">
</form>

<?php

if (isset($_POST['submit'])) {

    $n = $_POST['n'];
    ?>

    <form method="post">
        <h3>Enter Marks</h3>

        <?php
        for ($i = 1; $i <= $n; $i++) {
            echo "Student $i: ";
            echo "<input type='number' name='marks[]' min='0' max='100' required><br><br>";
        }
        ?>

        <input type="hidden" name="n" value="<?php echo $n; ?>">
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
}

if (isset($_POST['calculate'])) {

    $marks = $_POST['marks'];

    $distinction = 0;
    $failed = 0;

    foreach ($marks as $mark) {

        if ($mark >= 75) {
            $distinction++;
        }
        elseif ($mark < 35) {
            $failed++;
        }
    }

    echo "<h3>Result</h3>";
    echo "Number of Distinction Students: " . $distinction . "<br>";
    echo "Number of Failed Students: " . $failed;
}

?>

</body>
</html>
