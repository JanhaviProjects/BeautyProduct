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
            background-image: url('images/payment9.jpg'); /* Add your background image URL here */
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
        input[type="text"] {
            width: 100%; /* Make input fields fill the available width */
            padding: 8px; /* Add padding for better appearance */
            margin-bottom: 10px; /* Add spacing between input fields */
            box-sizing: border-box; /* Include padding and border in the element's total width */
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
        <img src="images/payment4.png" alt="MasterCard">
        <img src="images/payment5.png" alt="Visa">
        <img src="images/payment8.png" alt="Rupay">
    </div>

    <!-- Payment form -->
    <form action="order_placed.php" method="post">
        <!-- Add your payment form fields here -->
        <div class="form-row">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number">
        </div>
        <div class="form-row">
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date">
        </div>
        <!-- Add more fields as needed -->

        <!-- Submit button -->
        <input type="submit" value="Pay Now">
    </form>
</div>
</body>
</html>
