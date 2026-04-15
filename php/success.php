<?php
$status = $_GET['status'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
     <link rel="stylesheet" href="../style.css">
    <style>
        .success-box {
            text-align: center;
            padding: 30px;
        }

        .paid {
            color: #2ecc71;
            font-size: 22px;
            font-weight: bold;
        }

        .due {
            color: #e74c3c;
            font-size: 22px;
            font-weight: bold;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background: linear-gradient(45deg,#ff6a00,#ee0979);
            color: white;
            border-radius: 25px;
            text-decoration: none;
        }

        .btn-back:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container success-box">

    <h2>🎉 Submission Successful</h2>

    <?php if($status == "Paid"){ ?>
        <p class="paid">✅ Payment Completed Successfully</p>
    <?php } else { ?>
        <p class="due">⚠️ Payment Due Remaining</p>
    <?php } ?>

    <a href="index.php" class="btn-back">⬅ Go Back</a>

</div>

</body>
</html>