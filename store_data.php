<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST['mob'];
$DOB = $_POST['dob'];
$country = $_POST['country'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

// Prepare the SQL statement
$sql = "INSERT INTO users (name, email,mob,dob, country, password, password1) VALUES ('$name', '$email', '$mob','$DOB','$country','$password','$password1')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    // echo "Data saved successfully";
    header("Location:index.html");
} else {
    if ($conn->errno == 1062) {
        echo "<h1>Error! 0037 <br>Duplicate Entry. Email-Id Registered <a href='index.html'>click here</a> to login</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
