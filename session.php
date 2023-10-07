<?php 
    include('C:/xampp/htdocs/LOGIN_REGISTRATION/databases/dbcon.php');
    session_start();

    $sId = $_SESSION['email'];
    $sql_session = "SELECT * FROM users WHERE user_email = '$sId'";
    $result_session = $conn->query($sql_session);
    $row_session = $result_session->fetch_assoc();



?>