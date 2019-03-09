<?php

  use PHPUnit\Framework\TestCase;

  class AirportTest extends TestCase {

    public function testCreatedWithAGivenMaxHangarCapacity() {
      $airport = new Airport(5);
      $maxCapacity = $airport->hangarCapacity();
      $this->assertEquals($maxCapacity, 5);
    }

    public function testCanLandAPlane() {
      $airport = new Airport(3);
      $plane = $this->getMockBuilder(Plane::class);
      $plane = new stdClass;
      $airport->land($plane);
      $this->assertEquals($airport->isPlaneInHangar($plane), true);
    }

    public function testCanLetAPlaneTakeOff() {
      $airport = new Airport(1);
      $plane = new stdClass;
      $airport->land($plane);
      $airport->takeOff($plane);
      $this->assertEquals($airport->isPlaneInHangar($plane), false);
    }
  }
?>