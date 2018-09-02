<?php namespace Controller;

use Controller\BaseController as BaseController;

\Controller\RequireController::add();

class Test extends BaseController
{
    
    public function index($id = '') {
        $user = $this->getUserID($id);
        $header = $this->header();
        $footer = $this->footer();
        $index = $this->view('home/index', 
                ['name' => $user,
                'location' => 'Nabagram',
                    'header' => $this->header(),
                    'footer' => $this->footer()                    
        ]);
        
        
    }
    
    
}
