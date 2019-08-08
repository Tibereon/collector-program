<?php
require_once 'index.php';

function checkEmpty($testArray){
    $testArray = [1, 3 , 4];
    if (!empty($testArray)){
        return 'No monsters to display';
    } else {
        return 'Monsters found!';
    }
}
