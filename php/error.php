<?php
$msg = $_GET['msg'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h3 style="color:red; text-align:center;">
        <?php echo $msg; ?>
    </h3>

    <a href="index.php">Go Back</a>
</div>

</body>
</html>