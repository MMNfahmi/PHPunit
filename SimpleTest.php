<?php

use PHPUnit\Framework\TestCase;
require_once "Wordcount.php";
    class SimpleTest extends TestCase{
        public function testCountWords(){
            $Wc = new Wordcount();
            $TestSentence = "tangi turu langsung kuliah";
            $WordCount = $Wc->countWords($TestSentence);
            $this->assertEquals(4, $WordCount);
            //essertEquals berfungsi sebagai untuk membandingkan output pertama dengan methode yg dipassang
        }
    }
?>