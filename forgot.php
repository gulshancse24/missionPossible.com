<?php
// Establish database connection
require 'https://github.com/PHPMailer/PHPMailer.';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the submitted email address
$email = $_POST['email'];

// // Check if the email exists in the database
// $query = "SELECT * FROM users WHERE email = '$email'";
// $result = mysqli_query($conn, $query);
// if (mysqli_num_rows($result) == 1) {
//     // Generate a unique reset token
//     $resetToken = md5(uniqid());

//     // Store the reset token in the database
//     $query = "UPDATE users SET reset_token = '$resetToken' WHERE email = '$email'";
//     mysqli_query($conn, $query);

//     // Send the password reset email
//     $resetLink = "http://example.com/reset_password.php?token=$resetToken";
//     // $message = "Click the following link to reset your password: $resetLink";
//     // Use a library or PHP's built-in mail() function to send the email
//     // mail($email, 'Password Reset', $message);
//     $to = $email;
//     $subject = 'Password Reset';
//     $headers = "From: gkg6252018@gmail.com\r\n";
//     $headers .= "Reply-To: gkg6252018@gmail.com\r\n";
//     $headers .= "Content-Type: text/html\r\n";
//     $message = "Click the following link to reset your password: <a href='$resetLink'>$resetLink</a>";

//     if (mail($to, $subject, $message, $headers)) {
//         echo "An email with instructions to reset your password has been sent to your email address.";
//     } else {
//         echo "Failed to send the password reset email.";
//     }

//     echo "An email with instructions to reset your password has been sent to your email address.";
// } else {
//     echo "Invalid email address.";
// }

// // Close the database connection
// mysqli_close($conn);
// ...

// Check if the email exists in the database
$query = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Generate a unique reset token
    $resetToken = md5(uniqid());

    // Store the reset token in the database
    $query = "UPDATE users SET reset_token = '$resetToken' WHERE email = '$email'";
    $conn->query($query);

    // Send the password reset email
    $resetLink = "http://example.com/reset_password.php?token=$resetToken";
    // $message = "Click the following link to reset your password: $resetLink";
    // Use a library or PHP's built-in mail() function to send the email
    // mail($email, 'Password Reset', $message);
    $mail = new PHPMailer();

    // Enable SMTP debugging (optional)
    $mail->SMTPDebug = 2;

    // Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    // Set the SMTP port number - 587 for authenticated TLS, or 465 for SSL
    $mail->Port = 587;

    // Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = 'tls';

    // Set the SMTP authentication type
    $mail->SMTPAuth = true;

    // Set the SMTP username and password
    $mail->Username = 'your_username';
    $mail->Password = 'your_password';


    $mail->setFrom('gkg6252018@gmail.com', 'Sender Name');
    $mail->addAddress('gulshankumargaurav54@gmail.com', 'Recipient Name');
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email.';

    if ($mail->send()) {
    echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }



    } else {
    echo "Invalid email address.";
    }

// Close the database connection
$conn->close();

?>

