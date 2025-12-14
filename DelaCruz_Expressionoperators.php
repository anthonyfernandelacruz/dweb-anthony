<?php
$name = 'Anthony';
$discs = 18;
$tapes = 17;
$solo = ($tapes <= $discs);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Expression and opertors</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Music Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>We have:</p>
    <p>Disc: <?= $discs ?></p>
    <p>Disc: <?= $tapes ?></p>
    <p>If all bought in pair remaining is <?= $solo ?></p>
</body>
</html>