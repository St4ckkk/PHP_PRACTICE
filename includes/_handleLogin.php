<?php
include('C:/xampp/htdocs/LOGIN_REGISTRATION/databases/dbcon.php');

session_start();

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_pass = '$pass' ";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
echo"$email" . "$pass" . "$count";
if ($count == 1) {
    $_SESSION['email'] = $email;
    
    header("location: /LOGIN_REGISTRATION/dashboard.php?loginsuccess=true");
} else {
    header("location: /LOGIN_REGISTRATION/login.php?loginsuccess=false");
}

?>