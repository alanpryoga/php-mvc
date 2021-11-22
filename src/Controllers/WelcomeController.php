<?php

namespace App\Controllers;

class WelcomeController extends BaseController
{
    public function index()
    {
        echo $this->view->render('welcome');
    }
}
