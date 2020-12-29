<?php
    include "db.php";

    $email = $_REQUEST['email'];

    $sql = "INSERT INTO waiting_list (email) VALUES ('$email')";
    $result = $conn->query($sql);

    header("Location: ../index.php");
    exit();
?>
