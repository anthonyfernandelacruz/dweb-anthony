<?php
declare(strict_types=1);

$products = [
    "Vinyl Record" => ["price" => 1200.00, "stock" => 8],
    "CD Album" => ["price" => 500.00, "stock" => 25],
    "Cassette Tape" => ["price" => 300.00, "stock" => 5],
    "Band T-Shirt" => ["price" => 750.00, "stock" => 12],
    "Headphones" => ["price" => 1500.00, "stock" => 6],
    "Guitar Picks" => ["price" => 100.00, "stock" => 40]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    $total = $price * $quantity;
    return $total * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock Monitoring</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php
include "header.php";
include "nav.php";
?>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

<?php
foreach ($products as $product_name => $data) {

    echo "<tr>";
    echo "<td>$product_name</td>";
    echo "<td>{$data['stock']}</td>";
    echo "<td>" . get_reorder_message($data['stock']) . "</td>";
    echo "<td>" . get_total_value($data['price'], $data['stock']) . "</td>";
    echo "<td>" . get_tax_due($data['price'], $data['stock'], $tax_rate) . "</td>";
    echo "</tr>";
}
?>
</table>

<footer>
    <p>Music Store Inventory System</p>
</footer>

</body>
</html>
