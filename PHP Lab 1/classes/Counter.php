<?php
class Counter {
    //Member variables
    private $counter;
    //Constructor
    public function __construct() {
        $this->counter = 0;

    }
    //Member function
    public function setCounter($counter) {
        $this->counter = $counter;
    }
    public function getCount() {
        return $this->counter;
    }
    public function increaseCount() {
        $this->counter = ++$counter;
    }
}