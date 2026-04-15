<?php
session_start();
include("../config/db.php");

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = MD5($_POST['password']);

    $query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
    } else {
        header("Location: ../error.php?msg=Invalid Login");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
<h2>Admin Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

</div>

</body>
</html>