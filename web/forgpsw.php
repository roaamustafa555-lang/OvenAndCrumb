<?php
$db = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$new_psw = $_POST['newpassword'];

$q = "UPDATE users SET psw = '$new_psw' WHERE email = '$email'";
$result = mysqli_query($db, $q);

if ($result) {
    echo "<h2 style='text-align:center;'>Password Updated Successfully!</h2>";
    echo "<p style='text-align:center;'><a href='login.html'>Back to Login</a></p>";
} else {
    echo "Error: " ;
}
?>