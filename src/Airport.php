<?php

  class Airport {

    private $maxHangarCapacity = 0, $hangar = Array();

    function __construct($maxHangarCapacity) {
      $this->maxHangarCapacity = $maxHangarCapacity;
    }

    public function hangarCapacity() {
      return $this->maxHangarCapacity;
    }

    public function land($plane) {
      (count($hangar) < $this->maxHangarCapacity) ? array_push($this->hangar, $plane) : false;
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