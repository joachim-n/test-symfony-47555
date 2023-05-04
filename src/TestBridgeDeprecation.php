<?php

use Joachim\TestSymfony47555\Sut;
use PHPUnit\Framework\TestCase;

class TestBridgeDeprecation extends TestCase {

  // With this line commented out, the deprecation error is reported.
  protected $runTestInSeparateProcess = TRUE;

  /**
   * @covers foo
   */
  public function testFoo() {
    $sut = new Sut;
    $sut->doSomething();

    // Prevent complaining about no assertions.
    $this->assertTrue(TRUE);

    // Uncomment this to fail the test.
    // $this->assertTrue(FALSE);
  }


}