<?php
require_once 'index.php';

function checkEmpty($testArray){
    if (empty($testArray)){
        return 'No monsters to display';
    } else {
        return 'Monsters found!';
    }
}
