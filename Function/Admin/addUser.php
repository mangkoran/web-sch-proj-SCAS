<?php
// session_start();
require "../Init/config.php";

$username = $_POST["username"];
$password = $_POST["password"];
$id = $_POST["id"];
$userlevel = $_POST["user-level"];
$firstname = $_POST["first-name"];
$lastname = $_POST["last-name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];

// print "$username $password $id $userlevel $firstname $lastname $phone $email $address";
$sql = "INSERT INTO User VALUES (
    '$username',
    '$password',
    '$id',
    '$userlevel',
    '$firstname',
    '$lastname',
    '$phone',
    '$email',
    '$address'
    )";

if (mysqli_query($conn, $sql)) {
    echo "<h3>User added successfully</h3>";
} else {
    echo "Error adding user: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
