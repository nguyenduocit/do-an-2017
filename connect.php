<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van Duoc
 * Date: 21-02-2017
 * Time: 3:20 PM
 */

    class Database
    {
        public $host;
        public $user;
        public $password ;
        public $database_name;
        public function __construct()
        {
            $this->host = 'localhost';
            $this->user = 'root';
            $this->password ='';
            $this->database_name ='giasu';
        }
    }

    class ConnectDb
    {
        public $conn;
            public function __construct()
            {
                $db = new Database();
                $this->connect($db->host , $db->user , $db->password , $db->database_name);
            }

            public function connect($host,$user,$password,$database_name)
            {
                $this->conn = mysqli_connect($host,$user,$password,$database_name);
                if(!$this->conn){
                	die("Can not connect to database !!!! " . mysqli_connect_error());
                }
            }

            public function query_sql ($sql =''){

            		return $query = mysqli_query($sql);
          }


    }

    $connect_db = new ConnectDb();
?>