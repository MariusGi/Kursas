<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    $cities2 = [
        'Tokijas' => 13.6,
        'Vasingtonas' => 0.6,
        'Maskva' => 11.5
    ];
    $cities2['Londonas'] = 8.6 ;
?>

<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 ND</title>
</head>

<body>
    <ul>
        <li><?= $cities[1]; ?></li>
        <li><?php print_r($cities2); ?></li>
    </ul>
    <ul>
        <li><?php echo "Gyventojų skaičius: {$cities2['Tokijas']} mln.";?></li>
    </ul>
</body>
    
</html>