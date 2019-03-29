<?php
    function getYearPeriod($startYear='') { //to handle when user enters empty value
        if(is_numeric($startYear) && $startYear >= 0) {
            if($startYear >= date('Y')) {
                echo '&copy' . ' ' . date('Y');
            } else {
                echo '&copy' . ' ' . $startYear . ' - ' . date('Y');
            }
        } else {
            echo 'ERROR: Please enter positive numeric value.';
        }
    }
    getYearPeriod(2000);
?>