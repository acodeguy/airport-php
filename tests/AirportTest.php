<?php

  use PHPUnit\Framework\TestCase;

  class AirportTest extends TestCase {

    public function testCreatedWithAGivenMaxHangarCapacity() {
      $airport = new Airport;
      $maxCapacity = $airport->hangarCapacity();
      $this->assertEquals($maxCapacity, 5);
    }
  }
?>