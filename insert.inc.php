<?php
if(_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email_address=$_POST['email_address'];
    $phone=$_POST['phone'];
    $category=$_POST['category'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $message=$_POST['message'];

    try{
        require_once
    } catch (PDOException $e) {
        die("Query Failed: " .$e->getMessage());
    }
} else {
header("Location: ../");
}