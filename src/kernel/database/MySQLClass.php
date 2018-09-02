<?php namespace Database;

class MySQLClass
{
    protected $dsn = "mysql:host=localhost;dbname=mymvc";
    protected $username = "root";
    protected $password = "Sanjib@100";
    
    public function getConnection($connection) {
        $connection = new \PDO($this->dsn, $this->username, $this->password);
        return $connection;
    }
    
    public function myQuery($sql) {
        $con = $this->getConnection($this->dsn, $this->username, $this->password);
        try {
            if($con){
                $query = $con->query($sql);
                return $query;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
}
