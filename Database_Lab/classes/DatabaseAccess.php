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
    if (empty($fields)) {
        $items = Items::all();

        echo "<table>
                  <tr>
                    <th>Item ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                  </tr>";

        foreach ($items as $item) {
            // echo "<tr>
            //         <td>{$item->id}</td>
            //         <td>{$item->product_name}</td>
            //         <td>{$item->list_price}</td>
            //         <td><img src='../Resources/images/{$item->Photo}'alt='00'/></td>
            //       </tr>";
                
            echo <<<"tableData"
                <tr>
                    <td>{$item->id}</td>
                    <td>{$item->product_name}</td>
                    <td>{$item->list_price}</td>
                    <td>{$item->Photo}</td>
                    <td>
                        <img src="../Resources/images/01.png" width='100%' height="100%" alt="img"/>
                    </td>
                    </tr>
            tableData;
        }

        echo "</table>";
        // echo <<<'img'
        // <img src="../Resources/images/01.png" alt="img"/>
        // img;
    }
}

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