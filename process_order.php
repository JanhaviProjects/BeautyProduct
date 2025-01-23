<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "beauty";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $beauty_product = $_POST['beauty_product'];
    $payment = $_POST['payment'];
    

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO products (name, email, address, phone, beauty_product, payment) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $address, $phone, $beauty_product, $payment);

    if ($stmt->execute()) {     
        if ($payment == "Bank transfers") {
            header("Location: bank_transfer_page.php");
            exit();
        } else if ($payment == "Digital wallets") {
            header("Location: digital.php");
            exit();
        } else if($payment == "Credit and debit cards") {
            header("Location: debit.php");
            exit();
        }
        else if($payment == "Cash on delivery(COD)") {
            header("Location: cod.php");
            exit();
        }
        else {
            header("Location: thank_you_page.php");
            exit();
        }
        echo "Order placed successfully";
    } else {
        echo "Error: " . $stmt->error;
        // Handle errors as needed
    }
    

    $stmt->close();
}

$conn->close();
?>
