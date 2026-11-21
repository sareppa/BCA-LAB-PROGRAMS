<?php

/*
CREATE DATABASE student_registration_db;

USE student_registration_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    gender VARCHAR(10),
    course VARCHAR(50),
    phone VARCHAR(15)
);
*/

$conn = new mysqli("localhost", "root", "", "student_registration_db");

if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$message = "";

if(isset($_POST['submit']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = $_POST['gender'] ?? "";
    $course = $_POST['course'];
    $phone = trim($_POST['phone']);

    $stmt = $conn->prepare(
        "INSERT INTO students(name, email, gender, course, phone)
        VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param("sssss", $name, $email, $gender, $course, $phone);

    if($stmt->execute())
    {
        $message = "Registration Successful!";
    }
    else
    {
        $message = "Registration Failed!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Student Registration Form</h2>

<form method="POST">

    Student Name:
    <input type="text" name="name"
    value="<?php echo htmlspecialchars($_POST['name'] ?? ""); ?>" required>
    <br><br>

    Email:
    <input type="email" name="email"
    value="<?php echo htmlspecialchars($_POST['email'] ?? ""); ?>" required>
    <br><br>

    Gender:

    <input type="radio" name="gender" value="Male"
    <?php if(($_POST['gender'] ?? "") == 'Male') echo 'checked'; ?> required> Male

    <input type="radio" name="gender" value="Female"
    <?php if(($_POST['gender'] ?? "") == 'Female') echo 'checked'; ?>> Female

    <br><br>

    Course:

    <select name="course" required>

        <option value="">Select Course</option>

        <option value="BCA" <?php if(($_POST['course'] ?? "") == 'BCA') echo 'selected'; ?>>BCA</option>

        <option value="MCA" <?php if(($_POST['course'] ?? "") == 'MCA') echo 'selected'; ?>>MCA</option>

        <option value="BCom" <?php if(($_POST['course'] ?? "") == 'BCom') echo 'selected'; ?>>BCom</option>

        <option value="BSc" <?php if(($_POST['course'] ?? "") == 'BSc') echo 'selected'; ?>>BSc</option>

    </select>

    <br><br>

    Phone:
    <input type="text" name="phone"
    value="<?php echo htmlspecialchars($_POST['phone'] ?? ""); ?>" required>
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<h3><?php echo htmlspecialchars($message); ?></h3>

<hr>

<h2>Registered Students</h2>

<?php
$result = $conn->query("SELECT * FROM students ORDER BY id DESC");

if($result->num_rows > 0)
{
    echo "<table border='1' cellpadding='8'>";

    echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Course</th>
        <th>Phone</th>
    </tr>";

    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
        echo "<td>" . htmlspecialchars($row['course']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "No Records Found.";
}

$conn->close();
?>

</body>
</html>