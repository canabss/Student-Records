<?php
    class DbConnection{

        private $databaseConnection = "";
        private $hostName = "localhost";
        private $username = "root";
        private $password = "";
        private $databaseName = "student_records";
        
        public function databaseConnect(){

            $pdo = new PDO("mysql:host=".$this->hostName.";dbname=".$this->databaseName, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

        }
    }
