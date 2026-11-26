 <?php


$db = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$db) {
    die("Connection failed");
}
$user = $_POST['username'];
$psw  = $_POST['password'];

$q = "SELECT * FROM users WHERE username = '$user' AND psw = '$psw'";
$result = mysqli_query($db, $q);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.html");} 
else {
    echo "<h1 style='text-align:center; color:#CA9874;'>Invalid Username or Password<\h1>";
    echo "<br><a href='login.html'>Try Again</a>";
}
?>




