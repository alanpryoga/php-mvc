<?php

namespace App\Models;

/**
 * Base MVC Model
 * 
 * @author Ade Syahlan Prayoga <imalanpryoga@gmail.com>
 */
class BaseModel
{
    /**
     * MySQLi connection
     * 
     * @var \mysqli
     */
    protected $database;
    
    /**
     * Create BaseModel instance
     * 
     * @return void
     */
    public function __construct()
    {
        $dbConfig = require __DIR__ . '/../../config/database.php';

        // Connect to MySQL
        $this->database = new \mysqli(
            $dbConfig['host'],
            $dbConfig['username'],
            $dbConfig['password'],
            $dbConfig['dbname'],
            $dbConfig['port']
        );

        // Check connection
        if ($this->database->connect_errno) {
            echo 'Failed to connect to MySQL: ' . $this->database->connect_error;
            exit();
        }
    }
}
