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

/**
 * @param $monsterArray
 * @return string. This string is used to construct the cards to be displayed.
 */
function createCards($monsterArray){
    $isArrayValid = false;
    foreach ($monsterArray as $item) {
        if (
            array_key_exists('type', $item) && is_string ($item)
            && array_key_exists('element', $item) && is_string ($item)
            && array_key_exists('healthpoints', $item) && is_int($item)
            && array_key_exists('strength', $item) && is_int($item)
            && array_key_exists('speed', $item) && is_int($item)
            && array_key_exists('agility', $item) && is_int($item)
            && array_key_exists('armour', $item) && is_int($item)
            && array_key_exists('intelligence', $item) && (is_int($item))
        ) {
            $isArrayValid = true;
        }
        if($isArrayValid) {
            $output = "";
            foreach ($monsterArray as $item) {
                $output .= '<div class="card-container">' .
                    '<div class="card">';
                $output .= '<div class="card-title">' . $item['type'] . '</div>' .
                    '<div class="card-text">Element = ' . $item['element'] . '</div>' .
                    '<div class="card-text">Healthpoints = ' . $item['healthpoints'] . '</div>' .
                    '<div class="card-text">Strength = ' . $item['strength'] . '</div>' .
                    '<div class="card-text">Speed = ' . $item['speed'] . '</div>' .
                    '<div class="card-text">Armour = ' . $item['armour'] . '</div>' .
                    '<div class="card-text">Intelligence = ' . $item['intelligence'] . '</div>' .
                    '</div>' .
                    '</div>';
            }
            return $output;
        } else {
            return 'Your array is invalid';
        }
    }
}