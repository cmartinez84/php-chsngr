<?php

    require_once "src/Change.php";

    class ChangeTest extends PHPUnit_Framework_TestCase

    //run test in terminal: ./vendor/bin/phpunit tests

    //on Mac: run: export PATH=$PATH:./vendor/bin
    //then run phpunit tests
    {
      function test_quarters()
      {
        $test_Quarter = new Change;
        $input = 68;

        $result = $test_Quarter->quarters($input);

        $this->assertEquals(1, $result);
      }
    }
   //
  //   {
  //     // Testcode example
  //     //  function test_makeTitleCase_oneWord()
  //     //  {
  //     //      //Arrange
  //     //      $test_TitleCaseGenerator = new Template;
  //     //      $input = "beowulf";
  //      //
  //     //      //Act
  //     //      $result = $test_TitleCaseGenerator->testTemplate($input);
  //      //
  //     //      //Assert
  //     //      $this->assertEquals("Beowulf", $result);
  //     //  }
  //  }

 ?>
