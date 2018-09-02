<?php namespace Controller;

use Contracts\ControllerInterface as ControllerInterface;
use Database\UserRepositoryInterface as UserRepositoryInterface;

class BaseController implements ControllerInterface
{
    use \Behave\ControllerBehaviour;
    
    private $control;

    public function __construct(UserRepositoryInterface $users) {
        $this->control = $users;        
    }
    
    public function index($id = '') {
        $user = $this->control->getUserID($id);
        $header = $this->control->header();
        $footer = $this->control->footer();
        $index = $this->control->view('home/index', 
                ['name' => $user,
                'location' => 'Nabagram',
                    'header' => $this->control->header(),
                    'footer' => $this->control->footer()                    
        ]);
        
        
    }
    
    
}
