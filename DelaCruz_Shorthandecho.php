<?php
$name = 'Anthony';
$genre = ['P-Pop', 'Pop', 'Indie'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Music Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>Your favorite genre is:
        <?= $genre[0] ?>.</p>
</body>
</html>