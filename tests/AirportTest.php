<?php

  use PHPUnit\Framework\TestCase;

  class Airport extends TestCase {

    public function testCreatedWithAGivenHangarCapacity() {
      $airport = new Airport(5);
      $this->assertEquals(count($airport->hangar), 5);
    }
  }
?>