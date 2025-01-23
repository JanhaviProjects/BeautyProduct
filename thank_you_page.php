<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "beauty";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Orders:<br>"; // Display a general message before listing orders
    while ($row = $result->fetch_assoc()) {
        // Display order details, you can customize this based on your needs
        echo "Order ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Address: ". $row["address"]."<br>";
        echo "Phone: ". $row["phone"]."<br>";
        echo "Product: ". $row["beauty_product"]."<br>";
        echo "Payment: ". $row["payment"]."<br>";
        echo "<hr>";
    }
} else {
    echo "No orders found.";
}

$conn->close();
?>
<!-- Add the button here -->
<button onclick="redirectToIndex()">Go to Home</button>

<script>
function redirectToIndex() {
    window.location.href = 'index.html';
}
</script>