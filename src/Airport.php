<?php

  class Airport {

    private $maxHangarCapacity = 15;

    function __construct($maxHangarCapacity) {
      $this->maxHangarCapacity = $maxHangarCapacity;
    }

    public function hangarCapacity() {
      return $this->maxHangarCapacity;
    }
  }
?>