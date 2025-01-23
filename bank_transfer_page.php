<!DOCTYPE html>
<html>
<head>
    <title>Bank Transfer Information</title>
    <style>
        /* Center the content */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('images/secure2.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif; /* Change font-family if needed */
        }
        /* Style the content */
        .content {
            text-align: center;
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background */
            padding: 20px; /* Add padding for better readability */
            border-radius: 10px; /* Add border-radius for rounded corners */
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    
<div class="container">
        <div class="row d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center">
                    <span class="subheading"><h1>Bank Transfer Information</h1></span>
                    <h2 class="mb-4">Please transfer the total amount to the following bank account:</h2>
                </div>
                <form action="order_placed.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                                <label for="Bank name"><b>Bank name : </b></label>
                                   <input type="text" class="form-control" name="Bank name" placeholder="SBI, ICICI">
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Account Holder Name"><b>Account Holder Name : </b></label>
                                <input type="text" class="form-control" name="Account Holder Name" placeholder="John Deo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                             <label for="Account Number"><b>Account Number : </b></label>
                                <input type="text" class="form-control" name="Account Number" placeholder="XXXX XXXX XXXX XXXX">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="IFSC Code"><b> IFSC Code : </b></label>
                                <input type="text" class="form-control" name="IFSC Code" placeholder="XXXX XXXX">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="form-group text-center">
                            <input type="submit" value="Transaction" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>
                </form>
            <p><b>Once the transfer is complete, your order will be processed.</b></p> 
             </div>
        </div>
</div>
</body>
</html>
