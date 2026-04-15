<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h2>Student Form</h2>

    <form action="process.php" method="POST">
        
        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="text" name="batch" placeholder="Enter Batch" required>

        <input type="text" name="mobile" placeholder="Mobile Number" required>

        <input type="number" name="amount" placeholder="Paid Amount" required>

        <input type="number" name="total" placeholder="Total Course Fee" required>

        <select name="payment_method">
            <option value="">Select Payment Method</option>
            <option value="Bkash">Bkash</option>
            <option value="Nagad">Nagad</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>