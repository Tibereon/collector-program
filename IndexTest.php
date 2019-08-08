<?php

require './index.php';
require './indexTestFunctions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function test_hasMonsters()
    {
    //Setup
        $expectedResult = 'Monsters found!';
     //Execution
       $testArray = [1, 2 ,3];
        $result = checkEmpty($testArray);

    //Assertion
        $this->assertEquals($expectedResult, $result);
    }

}