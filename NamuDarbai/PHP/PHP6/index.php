<?php
    $metai = 1774;
    
//Pridedu cities masyvą iš PHP5 ND.
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'], 
        'Vasingtonas' => [0.6, 1790, 'JAV'],  
        'Maskva' => [11.5, 1147, 'Rusija']  
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
?>

<!DOCTYPE html>

<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP6 ND</title>
</head>

<body>
    <?php
        if($metai >= $cities3['Vasingtonas'][1]){
            echo 'Vasingtonas yra JAV sostinė';
        } elseif($metai === 1774) {
            echo 'JAV sostinė vis dar Filadelfijoje.';
        } else {
            $skirtumas = $cities3['Vasingtonas'][1] - $metai;
            echo "Liko $skirtumas metai (-ų) iki Vašingtono įkūrimo.";
        }
    ?>
</body>
    
</html>