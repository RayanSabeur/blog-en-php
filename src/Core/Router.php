<?php

namespace App\Core;
use  App\Controller\HomeController;

class Router {

 public function go()
 {
    $control = new HomeController();
        $control->index();

 }
    
}