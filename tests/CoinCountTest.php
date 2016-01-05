<?php

    require_once "src/CoinCount.php";

    class CoinCountTest extends PHPUnit_Framework_TestCase {

        //1. Enter "1" and return "1 penny".
        function testOnePenny() {

            //Arrange
            $test_CoinCount = new CoinCount;
            $input = "1";

            //Act
            $result = $test_CoinCount->makeChange($input);

            //Assert
            $this->assertEquals("one penny", $result);
        }

        //2. Enter " .02" and return " 2 pennies".
        function testTwoPenny() {

            //Arrange
            $test_CoinCount = new CoinCount;
            $input = "2";

            //Act
            $result = $test_CoinCount->makeChange($input);

            //Assert
            $this->assertEquals("two pennies", $result);
        }
    }
 ?>
