<?php

    class Database{
    public $servername= 'localhost';
    public $username ='khangth';
    public $passwd='Password1!';
    public $dbname='OnlineStore';
    protected $conn = '';
        public function createConnection(){
            $this->conn = new mysqli($this->servername,$this->username,$this->passwd,$this->dbname);
            if(!$this->conn){
                die("Connection failed: ". mysqli_connect_error());
            }
            return $this->conn;
        }
    }



    







?>