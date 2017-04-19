<?php
namespace Home\Controller;
use Tools;

class IndexController extends Tools\HomeController {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->display();
    }
}