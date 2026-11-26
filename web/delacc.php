<?php
$db = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$db) {
    die("Connection failed");
}

$user = $_POST['username'];
$psw  = $_POST['password'];

$q = "DELETE FROM users WHERE username = '$user' AND psw = '$psw'";
$result = mysqli_query($db, $q);

if (mysqli_affected_rows($db) > 0) {
    echo "<h1 style='text-align:center; color:#CA9874;'>Account Deleted Successfully</h1>";
} else {
    echo "<h1 style='text-align:center; color:#CA9874;'>Invalid Username or Password</h1>";
}
?>