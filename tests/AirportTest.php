<?php

  use PHPUnit\Framework\TestCase;

  class AirportTest extends TestCase {

    public function testCreatedWithAGivenMaxHangarCapacity() {
      $airport = new Airport(5);
      $maxCapacity = $airport->hangarCapacity();
      $this->assertEquals($maxCapacity, 5);
    }
  }
?>