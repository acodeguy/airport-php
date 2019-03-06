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

    public function isPlaneInHangar($plane) {
      return in_array($plane, $this->hangar);
    }
  }
?>