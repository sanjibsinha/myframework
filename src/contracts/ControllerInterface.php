<?php namespace Contracts;

 interface ControllerInterface {
     
     public function index($id);
     
     public function create();
     
     public function update($id);
     
     public function delete($id);
    
}


