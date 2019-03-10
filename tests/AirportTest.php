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
      $airport->land($plane);
      $this->assertTrue($airport->isPlaneInHangar($plane));
    }

    public function testCanLetAPlaneTakeOff() {
      $airport = new Airport(1);
      $plane = $this->getMockBuilder(Plane::class);
      $airport->land($plane);
      $airport->takeOff($plane);
      $this->assertFalse($airport->isPlaneInHangar($plane));
    }

    // public function testPlanesCannotLandIfHangarFull() {
    //   $airport = new Airport(1);
    //   $plane = $this->getMockBuilder(Plane::class);
    //   $secondPlane = $this->getMockBuilder(Plane::class);
    //   $airport->land($plane);
    //   $this->assertTrue($airport->isPlaneInHangar($plane));
    //   $airport->land($secondPlane);
    //   $this->assertFalse($airport->isPlaneInHangar($secondPlane));
    // }
  }
?>