<?php

namespace app\controllers;

class HomeController
{
    public function about()
    {
        
        return Controller::view('sobre');
    }
}