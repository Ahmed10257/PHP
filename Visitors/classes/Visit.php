<?php
class Visit {
    //Member variables
    private $visit_flag;
    static $visits = array();
    //Constructor
    public function __construct() {
        $visit_flag=false;
        // echo "Visit IP is $ip and browser is $browser";

        }
    //Member function
    public function setVisitFlag($flag) {
        $this->visit_flag = $flag;
    }
    public function getVisitFlag() {
        return $this->visit_flag;
    }

}
?>
