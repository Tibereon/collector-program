<?php
require_once 'index.php';

function checkEmpty($testArray){
    if (empty($testArray)){
        return 'Array empty!';
    } else {
        return 'Items in array';
    }
}

function checkCreateCards($monsterArray){
    createCards($monsterArray);

}