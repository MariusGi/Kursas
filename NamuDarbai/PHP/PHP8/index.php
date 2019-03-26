<?php
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $sumTemp = 0;

//removing duplicate values from temp array. To use for highest and lowest temperatures later on.
    $temp2 = array_unique($temp);
    
//getting sum of all temperatures
    foreach($temp as $t) {
        $sumTemp += $t;
    }

//calculating average of all temperatures
    $avgTemp = $sumTemp / count($temp);
//rounding average of all temperatures
    $roundAvgTemp = round($avgTemp);

//sorting temperature array descending and getting top 5 temperatures.
    rsort($temp2);
    $top5Temp = array_slice($temp2, 0, 5);

//sorting temperature array ascending and getting bottom 5 temperatures.
    sort($temp2);
    $bottom5Temp = array_slice($temp2, 0, 5);
?>

<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8 ND</title>
</head>

<body>
    <p><?= $roundAvgTemp ?></p>
<!--Top 5 temperatures-->
    <p>
        <?php 
            foreach($top5Temp as $temp) {
                echo $temp .' ';
            } 
        ?>
    </p>
<!--Bottom 5 temperatures-->
    <p>
        <?php 
            foreach($bottom5Temp as $temp) {
                echo $temp .' ';
            } 
        ?>
    </p>
</body>
    
</html>