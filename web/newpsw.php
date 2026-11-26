<?php

$db = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$db) {
    die("Connection failed");
}


$new_psw   = $_POST['newpassword'];
$check_psw = $_POST['checkpassword'];


if ($new_psw == $check_psw) {
    
    $email = "test@gmail.com"; 

    
    $q = "UPDATE users SET psw = '$new_psw' WHERE email = '$email'";
    $result = mysqli_query($db, $q);

    if ($result) {
        echo "Password updated successfully";
        echo "<br><a href='login.html'>Login Now</a>";
    } else {
        echo "Error updating password: " . mysqli_error($db);
    }

} else {
    
    echo "Passwords do not match. Please try again.";
    echo "<br><a href='newpsw.html'>Back</a>";
}
?>