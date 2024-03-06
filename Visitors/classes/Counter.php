<?php
class Counter {
    //Member variables
    private $counter;
    //Constructor
    public function __construct() {
        $this->counter = 0;

    }
    //Member function
    public function setCounter($count) {
        $this->counter = $count;
    }
    public function getCount() {
        return $this->counter;
    }
    public function increaseCount() {
        ++$this->counter;
    }
}