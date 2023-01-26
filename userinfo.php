<?php
$con = mysqli_connect('localhost','root');
if ($con) {
    # code...
    echo 'connection success';
} else {
    # code...
}
mysqli_select_db($con,'missionpossible');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];
$query = "INSERT into userinfo(user, email, mobile,comments)
values ('$user','$email','$mobile','$comments')";
mysqli_query($con,$query);
header('location:index.php')
?>