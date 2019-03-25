<?php
    $x = 10;
    $y = 7;
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 ND</title>
</head>

<body>
    <?php $z = $x + $y; ?>
    <p><?= "$x + $y = $z" ; ?></p>    
    <?php $z = $x - $y; ?>
    <p><?= "$x - $y = $z" ; ?></p>    
    <?php $z = $x * $y; ?>
    <p><?= "$x * $y = $z" ; ?></p>    
    <?php $z = $x / $y; ?>
    <p><?= "$x / $y = $z" ; ?></p>    
    <?php $z = $x % $y; ?>
    <p><?= "$x % $y = $z" ; ?></p>
</body>
    
</html>