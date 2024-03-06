<?php
// Calling the Capsule class from the Illuminate\Database\Capsule namespace
use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseAccess implements DbHandler {
    private $connection;
    private $host;
    private $name;
    private $user;
    private $pass;
    private $driver;
    private $_capsule;
    //Completed the constructor
    public function __construct() {
        $this->_capsule = new Capsule;
        $this->_capsule->bootEloquent();
    }
    //Completed the connect method
    public function connect() {
        try {
            $this->_capsule->addConnection([
                'driver' => Driver_DB,
                'host' => Host_DB,
                'database' => Name_DB,
                'username' => User_DB,
                'password' => Pass_DB,
                'collation' => collation,
                'charset' => charset,
            ]);
            // $this->_capsule->setAsGlobal();
            // $this->_capsule->bootEloquent();
            return true;
        } catch(Exception $e) {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
    }

    public function get_data($fields = array(), $start = 0) {

        if (empty($fields)) //checking the length of the array
        {
            $items=(Items::all("*"));
            foreach($items as $item){
                echo $item->id ."<br>";
            }
        
    }}
    //Suposed to be done
    public function disconnect() {
        try{
            $this->_capsule->getConnection()->disconnect();
            return true;
        }
        catch(Exception $e){
            echo "Disconnection failed: " . $e->getMessage();
            return false;
        
    }}
    public function get_record_by_id($id, $primary_key) {
       
    }
}