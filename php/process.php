<?php
include("../config/db.php");
$name = $_POST['name'];
$batch = $_POST['batch'];
$mobile = $_POST['mobile'];
$amount = $_POST['amount'];
$total = $_POST['total'];
$method = $_POST['payment_method'];

// VALIDATION
if(strlen($name) < 4){
    header("Location: error.php?msg=Name must be at least 4 characters");
    exit();
}

if(strlen($mobile) != 11 || !is_numeric($mobile)){
    header("Location: error.php?msg=Mobile must be 11 digits");
    exit();
}

if(empty($method)){
    header("Location: error.php?msg=Select payment method");
    exit();
}// PAYMENT STATUS LOGIC
if($amount >= $total){
    $status = "Paid";
} else {
    $status = "Due";
}



// INSERT INTO DATABASE
$query = "INSERT INTO students(name,batch,mobile,payment_method,amount_paid,total_fee,status)
VALUES('$name','$batch','$mobile','$method','$amount','$total','$status')";

mysqli_query($conn, $query);

// REDIRECT
header("Location: success.php?status=$status");
exit();
?>