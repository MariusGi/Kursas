<?php
    if (isset($_GET['height']) && isset($_GET['width'])) {
        if($_GET['height'] && $_GET['width']) {
            echo $_GET['height'] * $_GET['width'];
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP11 ND</title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="GET">
        Height: <input type="text" name="height" />
        Width: <input type="text" name="width" />
        <input type="submit">
    </form>
</body>
    
</html>