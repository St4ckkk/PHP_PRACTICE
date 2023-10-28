<?php
include('C:/xampp/htdocs/LOGIN_REGISTRATION/databases/dbcon.php');
session_start();

$uploaddir = "C:/xampp/htdocs/LOGIN_REGISTRATION/img/";
$uploadfile = $uploaddir . basename($_FILES['ufile']['name']);

if (isset($_POST['uploadPic'])) {
    if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)) {
        echo '<img src="/LOGIN_REGISTRATION/img/' . basename($_FILES["ufile"]["name"]) . '" width="200" height="200">';
        
        $ufile = $_SESSION['ufile']; // Assuming 'ufile' is the user's identifier
        $file_path = "/LOGIN_REGISTRATION/img/" . basename($_FILES["ufile"]["name"]);

        $update_query = "UPDATE user_profile SET profile_picture = '$file_path' WHERE ufile = '$ufile'";
        $result = mysqli_query($conn, $update_query);

    } else {
        echo "<script>alert('Image upload failed, please try again.'); window.location=document.referrer;</script>";
    }
}
?>
