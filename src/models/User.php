<?php namespace Model;

use Database\MySQLClass as MySQLClass;

class User
{
    public $id;


    public static function selectUser($id) {
        $db = new MySQLClass;
        $result = $db->myQuery("SELECT * FROM users WHERE id={$id}");
        if($result === false){
            die("Error executing the query: $statement");            
        }
        while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            $name = htmlspecialchars($row['name']);
            return $name;            
        }       
    }
    
}