<?php namespace Database;

use Database\ConnectionManagerInterface as ConnectionManagerInterface;
use Database\MySQLClass as MySQLClass;

class DriverAdapterClass implements ConnectionManagerInterface
{
    private $mysql;
    
    public function __construct(MySqlClass $mysql) {
        $this->mysql = $mysql;
    }

    public function connect($connection) {
        $this->mysql->getConnection($connection);
    }
}