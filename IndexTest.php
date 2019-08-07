<?php

require './index.php';
require './indexTestFunctions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testMonsterArray_hasMonsters()
    {
    //Setup
        $expectedResult =  true;
     //Execution
        if (!empty($monsterArray)){
            $result = false;
        } else {
            $result = true;
        }

    //Assertion
        $this->assertEquals($expectedResult, $result);
    }

    public function testMonsters_hasValues()
    {
        // Setup
        $monster = [];
        $expected = 'string';

        // Execution

    }

}