
<?php
/*$host = "localhost";
$user = "root";
$pass = "12345678";
$dbname = "bakery_db";*/

$conn = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$conn) {
    die("Connection failed");
}else echo "welcome";
?>
</body>
</html>
