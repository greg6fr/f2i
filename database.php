<?php
    class Database {
     private   $localhost="localhost";
     private   $db='f2i';
     private    $user="root";
     private    $password="";
     private   $port=3306;

        public function connectDb() {
                try {
                    //code...
                    $pdo = new PDO('mysql:host='.$this->localhost.';port='.$this->port.';dbname='.$this->db.'', $this->user, $this->password);
                $pdo->exec("SET CHARACTER SET utf8");
                return $pdo;
                } catch (Exception $e) {
                    //throw $th;
                    $e->getMessage();
                }
        }
    }
?>