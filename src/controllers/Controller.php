<?php namespace Controller;

use Model\User as User;
use Kernel\View as View;
use Layout\Header as Header;
use Layout\Footer as Footer;
use Database\UserRepositoryInterface as UserRepositoryInterface;

class Controller implements UserRepositoryInterface
{
    protected $id;
    protected $name;
    protected $data = [];    

    public function getUserID($id) {
        $this->id = $id;
        $user = User::selectUser($id);
        return $user;
    }
    
    public function view($name, $data = []) {
        $this->name = $name;
        $this->data = $data;
        require_once '../src/views/' . $name . '.php';
    }
    
    public function header() {
        $header = new Header;
        return $header->header;
    }
    
    public function footer() {
        $footer = new Footer;
        return $footer->footer;        
    }
    
}
