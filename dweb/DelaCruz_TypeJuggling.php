<?php
$albumPrice = "499";
$quantity = 2;
$totalCost = $albumPrice * $quantity;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Type Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h1>Music Store</h1>
    <p>Album Price: ₱<?php echo $albumPrice; ?></p>
    <p>Quantity: <?php echo $quantity; ?></p>
    <p>Total Cost: ₱<?php echo $totalCost; ?></p>

</body>
</html>
