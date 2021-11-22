<?php

namespace App\Controllers;

use League\Plates\Engine as ViewEngine;

/**
 * Base MVC Controller
 * 
 * @author Ade Syahlan Prayoga <imalanpryoga@gmail.com>
 */
class BaseController
{
    /**
     * View engine instance
     * 
     * @var \League\Plates\Engine
     */
    protected $view;
    
    /**
     * Create BaseController instance
     * 
     * @return void
     */
    public function __construct()
    {
        // Create view engine instance
        $this->view = new ViewEngine(__DIR__ . '/../../templates');
    }
}
