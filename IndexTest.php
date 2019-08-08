<?php

require './index.php';
require './indexTestFunctions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testMonsterArray_hasMonsters($testArray)
    {
    //Setup
        $expectedResult = 'Monsters found!';
     //Execution
        $result = checkEmpty($testArray);

    //Assertion
        $this->assertEquals($expectedResult, $result);
    }

}