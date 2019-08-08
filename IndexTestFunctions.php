<?php
require_once 'index.php';

function checkEmpty($testArray){
    if (empty($testArray)){
        return 'Monsters found!';
    } else {
        return 'No monsters to display';
    }
}

function checkCreateCards($monsterArray){
    createCards($monsterArray);

}