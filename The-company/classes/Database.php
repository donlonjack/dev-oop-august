<?php

class Database{
    Private $server_name = "localhost";
    Private $db_username = "root";
    Private $db_password = "root"; // WINDOWS users: "" ~~ blank password
    Private $db_name = "the_company";
    Protected $conn;

    public function __construct(){
            # CREATE THE CONNECTION
            $this->conn = new mysqli($this->server_name, $this->db_username, $this->db_password, $this->db_name);
        
            # ERROR HANDLING
            if($this->conn->connect_error){
                die("Unable to connect to the Database " . $this->db_name . " : ".$this->conn->connect_error);
            }
        }
    }

?>