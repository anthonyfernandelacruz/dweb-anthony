<?php
$name = "Anthony";
$genres = ["P-Pop", "Pop", "Indie", "Rock"];
$favoriteGenre = $genres[0];
$budget = 1000;

include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Music Store Activity</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h2>Welcome <?php echo $name; ?></h2>

<p>Your favorite genre is: <?= $favoriteGenre; ?></p>

<?php
if ($budget >= 1000) {
    echo "<p>You have enough budget to buy albums.</p>";
} else {
    echo "<p>You do not have enough budget.</p>";
}
?>

<h2>Available Genres</h2>

<?php
for ($i = 0; $i < count($genres); $i++) {
    echo "<p>Genre " . ($i + 1) . ": " . $genres[$i] . "</p>";
}
?>

<h2>Genre Check</h2>

<?php
foreach ($genres as $genre) {
    if ($genre == "Pop") {
        echo "<p>$genre is very popular in the store.</p>";
    } else {
        echo "<p>$genre is available.</p>";
    }
}
?>
</body>
</html>
