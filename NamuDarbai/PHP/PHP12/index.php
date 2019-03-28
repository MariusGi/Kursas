<?php
    if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        if($_POST['firstName'] && $_POST['lastName']) {
            echo $_POST['firstName'] . ' ' . $_POST['lastName'];
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP12 ND</title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        First Name: <input type="text" name="firstName" />
        Last Name: <input type="text" name="lastName" />
        <input type="submit">
    </form>
</body>
    
</html>