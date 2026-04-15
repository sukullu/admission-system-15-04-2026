<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container" style="width:90%;">
<h2>Admin Dashboard</h2>

<a href="logout.php">Logout</a>

<table border="1" width="100%" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Batch</th>
<th>Mobile</th>
<th>Method</th>
<th>Paid</th>
<th>Total</th>
<th>Status</th>
</tr>

<?php
$query = "SELECT * FROM students ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['batch']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['payment_method']; ?></td>
<td><?php echo $row['amount_paid']; ?></td>
<td><?php echo $row['total_fee']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>