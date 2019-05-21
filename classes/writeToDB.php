<?php

class WriteToDB{//SINGLETON

    private static $instance = null;
    private $conn;

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "flights";
    public $message;


    private function __construct(){
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function connectToDb(){
      if(!self::$instance){
        self::$instance = new WriteToDB();
      }
      return self::$instance;
    }

    private function createSqlCommand($message){
        $message = '"' . $message . '"';
        return "INSERT INTO logs (content) VALUES ($message)";
    }

    private function executeSqlCommand($sql){
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function recordDataToDB($message){
        $b = $this->createSqlCommand($message);
        $this->executeSqlCommand($b);
    }
}

?>
