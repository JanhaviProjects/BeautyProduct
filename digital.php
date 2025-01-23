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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Debit Card Transfer Payment</title>
    <style>
        /* Center the content */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('images/secure3.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif; /* Use a common font for better compatibility */
        }
        /* Add styling for the logos */
        .payment-logos {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .payment-logos img {
            width: 50px; /* Adjust the width as needed */
            margin: 0 10px; /* Add space between logos */
        }
        /* Style the form */
        form {
            text-align: center;
            max-width: 400px; /* Limit the form width for better readability */
            margin: auto; /* Center the form horizontally */
            padding: 20px; /* Add padding for better appearance */
            background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent background */
            border-radius: 8px; /* Add rounded corners */
        }
        label {
            display: block; /* Ensure each label appears on a new line */
            margin-bottom: 10px; /* Add spacing between labels and inputs */
        }
        input[type="text"], input[type="password"] {
            width: 100%; /* Make input fields fill the available width */
            padding: 8px; /* Add padding for better appearance */
            margin-bottom: 10px; /* Add spacing between input fields */
            box-sizing: border-box; /* Include padding and border in the element's total width */
        }
        .form-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .form-row label {
            flex: 1;
            text-align: left;
        }
        .form-row input {
            flex: 2;
        }
        input[type="submit"] {
            width: 100%; /* Make the submit button fill the width */
            padding: 10px; /* Add padding to the submit button */
            font-size: 16px; /* Increase font size for better visibility */
            background-color: #007bff; /* Set button background color */
            color: #fff; /* Set button text color */
            border: none; /* Remove button border */
            border-radius: 4px; /* Add rounded corners */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
    </style>
</head>
<body>
<div>


    <h1>Select Payment Method</h1>
    
    <!-- Payment logos -->
    <div class="payment-logos">
        <img src="images/payment2.png" alt="Google Pay">
        <img src="images/payment3.png" alt="PayPal">
        <img src="images/payment6.png" alt="Paytm">
        <img src="images/payment7.png" alt="PhonePay">
    </div>

    <!-- Payment form -->
    <form action="order_placed.php" method="post">
        <!-- Add your payment form fields here -->
        <label for="payment">Payment Method</label>
        <select name="payment" id="payment" class="form-control">
            <option value="Google Pay">Google Pay</option>
            <option value="PayPal">PayPal</option>
            <option value="Paytm">Paytm</option>
            <option value="PhonePay">PhonePay</option>
        </select>
        <div class="form-row">
            <label for="WalletID">Wallet ID:</label>
            <input type="text" id="WalletID" name="WalletID" placeholder="************">
        </div>
        <div class="form-row">
            <label for="PasswordorPIN">Password or PIN:</label>
            <input type="password" id="PasswordorPIN" name="PasswordorPIN" placeholder="******">
        </div>
        <!-- Add more fields as needed -->

        <!-- Submit button -->
        <input type="submit" value="Pay Now">
    </form>
</div>
</body>
</html>
