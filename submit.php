<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, email, message)
VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error";
}
?>