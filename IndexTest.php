<?php

require_once './functions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function test_isArrayEmpty()
    {
    //Setup
        $expectedResult = 'Items in array';
     //Execution
        $testArray = [1, 2 ,3];
        $result = checkEmpty($testArray);

    //Assertion
        $this->assertEquals($expectedResult, $result);
    }

    public function test_createCards()
    {
        //Setup
        $expectedResult = '<div class="card-container"><div class="card"><div class="card-title">Goblin</div><div class="card-text">Element = Earth</div><div class="card-text">Healthpoints = 16</div><div class="card-text">Strength = 10</div><div class="card-text">Speed = 16</div><div class="card-text">Armour = 2</div><div class="card-text">Intelligence = 50</div></div></div><div class="card-container"><div class="card"><div class="card-title">Slime</div><div class="card-text">Element = Earth</div><div class="card-text">Healthpoints = 3</div><div class="card-text">Strength = 2</div><div class="card-text">Speed = 1</div><div class="card-text">Armour = 0</div><div class="card-text">Intelligence = 0</div></div></div>';
        //Execution
        $testMonsters = [['id' => '1', 'type' => 'Goblin', 'healthpoints' => '16', 'strength' => '10', 'speed' => '16', 'agility' => '14', 'armour' => '2', 'intelligence' => '50', 'element' => 'Earth']
                        , ['id' => '2', 'type' => 'Slime', 'healthpoints' => '3', 'strength' => '2','speed' => '1', 'agility' => '4', 'armour' => '0', 'intelligence' => '0', 'element' => 'Earth']];
        $result = createCards($testMonsters);

        //Assertion
        $this->assertEquals($expectedResult, $result);

    }

    public function test_arrayFormat()
    {
        //Setup
        $expectedResult = 'Your array is invalid';
        //Execution
        $testMonsters = [['id' => '1', 'Species' => 'Goblin', 'healthpoints' => '16', 'strength' => '10', 'speed' => '16', 'agility' => '14', 'armour' => '2', 'intelligence' => '50', 'element' => 'Earth']
            , ['id' => '2', 'type' => 'Slime', 'bricks' => '37', 'strength' => '2','speed' => '1', 'agility' => '4', 'armour' => '0', 'intelligence' => '0', 'element' => 'Earth']];
        $result = createCards($testMonsters);

        //Assertion
        $this->assertEquals($expectedResult, $result);
    }

    public function test_arrayDataTypes()
    {
        //Setup
        $expectedResult = 'Your array is invalid';
        //Execution
        $testMonsters = [['id' => '1', 'type' => '9', 'healthpoints' => 'lots', 'strength' => '10', 'speed' => '16', 'agility' => '14', 'armour' => '2', 'intelligence' => '50', 'element' => 'Earth']
            , ['id' => '2', 'type' => 'Slime', 'healthpoints' => '37', 'strength' => '2','speed' => '1', 'agility' => '4', 'armour' => '0', 'intelligence' => '0', 'element' => 'Earth']];
        $result = createCards($testMonsters);

        //Assertion
        $this->assertEquals($expectedResult, $result);
    }
}