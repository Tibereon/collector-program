<?php

require './index.php';
require './indexTestFunctions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testMonsterArray_hasMonsters()
    {
    //Setup
        $expectedResult = 'Monsters found!';
     //Execution
        $testArray = [1, 3, 4];
        $result = checkEmpty($testArray);
    //Assertion
        $this->assertEquals($expectedResult, $result);
    }

}