<?php namespace Controller;

class RequireController
{
    public static function add() {
        require_once '../src/controllers/basecontroller.php';
    }
}