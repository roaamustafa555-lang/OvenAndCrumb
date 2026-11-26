<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Oven & Crumb</title>
    
</head>
<body>
<?php
$db = mysqli_connect("localhost", "root", "","bakery_db");
if (!$db) {
    die("Connection failed");
}
$user=$_POST["username"];
$psw=$_POST["password"];
$email=$_POST["email"];
$q="insert into users (email,username,psw) values ('$email','$user','$psw')";
mysqli_query($db,$q);

if ($q) {
    header("Location: index.html?status=success");
} else {
    echo "Error: " . mysqli_error($db);
}
?>
 
</body>
</html>