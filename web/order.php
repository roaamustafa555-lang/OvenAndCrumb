<?php
$db = mysqli_connect("localhost", "root", "", "bakery_db");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$names = [
    "Cinnamon Roll", "Vanilla Cupcake", "Almond Croissant", 
    "Fruit Tart", "Artisan Sourdough", "Chocolate Fudge Cake", 
    "Butter Croissant", "Chocolate Chip Cookies", "Glazed Donut"
];

$prices = [2.25, 2.75, 2.50, 3.99, 2.50, 2.99, 1.75, 3.50, 1.25];

$qtys = $_POST['qty']; 

$total = 0;

echo "<h2 style='text-align:center; color:#CA9874;'>Order Summary</h2>";
echo "<table border='1' style='border-collapse: collapse; width: 60%; margin: auto; text-align: center; font-family: Arial, sans-serif;'>
        <tr style='background-color: #E1A5A9; color: white;'>
            <th>Item</th><th>Qty</th><th>Subtotal</th>
        </tr>";

for ($i = 0; $i < count($names); $i++) {
    if ( $qtys[$i] > 0) {
        $current_qty = $qtys[$i];
        $subtotal = $current_qty * $prices[$i];
        $total += $subtotal;
        $product_name = $names[$i];

        $q = "INSERT INTO orders (name, qyt, price) VALUES ('$product_name', '$current_qty', '$subtotal')";
        mysqli_query($db, $q);

        echo "<tr>
                <td>$product_name</td>
                <td>$current_qty</td>
                <td style='background-color: #F3E6DD;'>$subtotal JOD</td>
              </tr>";
    }
}

echo "<tr style='background-color: #F3C6C1; font-weight: bold; color:#CA4B6C;'>
        <td colspan='2'>Total</td>
        <td>$total JOD</td>
      </tr>";
echo "</table>";

echo "<div style='text-align:center; margin-top:20px;'>
        <a href='ordarrr.html' style='text-decoration:none; color:#CA9874;'>Back to Menu</a>
      </div>";
?>