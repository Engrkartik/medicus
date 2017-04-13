<?php
include 'db_config.php';
class connection
{
    //private $host, $username, $password, $database;

    public function __construct(){

        $this->db= new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if(mysqli_connect_errno())
        {
            echo "Error: Could not connect to database.";
            exit;
        }

        return true;
    }
    
    public function __destruct() {
        mysqli_close($this->db)
        OR die("There was a problem disconnecting from the database.");
    }
}
?>