<?php

  class Airport {

    private $maxHangarCapacity = 15, $hangar = Array();

    function __construct($maxHangarCapacity) {
      $this->maxHangarCapacity = $maxHangarCapacity;
    }

    public function hangarCapacity() {
      return $this->maxHangarCapacity;
    }

    public function land($plane) {
      array_push($this->hangar, $plane);
    }

    public function takeOff($plane) {
      $planeIndex = array_search($plane, $this->hangar);
      array_splice($this->hangar, $planeIndex, 1);
    }

    public function isPlaneInHangar($plane) {
      return in_array($plane, $this->hangar);
    }
  }
?>