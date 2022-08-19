<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "test1";
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $fullName=$_POST['fullName'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $addres=$_POST['addres'];


    $sql = "INSERT INTO registration (fullName, contact, email, addres) VALUES ('$fullName', '$contact', '$email', '$addres')";


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "Order Conformed Successfully";
    mysqli_close($conn);
?>