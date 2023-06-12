<?php
// Establish a database connection
$conn = mysqli_connect('localhost', 'root', '', 'login');
if (!$conn) {
    die('Database connection error');
}

// Get the reset token from the URL
$resetToken = $_GET['token'];

// Check if the reset token exists in the database
$query = "SELECT * FROM users WHERE reset_token = '$resetToken'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    // Display the password reset form
    echo "
    <form method='POST' action='update_password.php'>
        <label for='password'>New Password:</label>
        <input type='password' name='password' required>
        <br>
        <input type='hidden' name='token' value='$resetToken'>
        <input type='submit' value='Reset Password'>
    </form>
    ";
} else {
    echo "Invalid reset token.";
}

// Close the database connection
mysqli_close($conn);
?>
