<?php
include('C:/xampp/htdocs/LOGIN_REGISTRATION/databases/dbcon.php');

$uname = $_POST['uname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM users WHERE user_email = '$email'";
$rsult = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Register successfully');</script>";
    header("location: /LOGIN_REGISTRATION/registration.php?loginsuccess=false&error=email_exists");
    exit();
} else {
    echo "<script>alert('Register successfully');</script>";
    $sql = "INSERT INTO users (`username`, `user_email`, `user_pass`, `gender`) VALUES ('$uname', '$email', '$pass', '$gender')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('Registration successful');</script>";
        header("location: /LOGIN_REGISTRATION/login.php?loginsuccess=true");
        exit();
    } else {
        echo "<script>alert('Registration failed');</script>";
        header("location: /LOGIN_REGISTRATION/registration.php?loginsuccess=false&error=insert_failed");
        exit();
    }
}
?>
