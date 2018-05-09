<?php

/**
 * MySQL Database class - only one connection allowed
 */

class Database {
    private $_connection;
    private static $_instance;  //  The single instance.
    private $_host = "HOST";
    private $_username = "USERNAME";
    private $_password = "PASSWORD";
    private $_database = "DATABASE";

    //  Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        //  Error handling
        if (mysqli_connect_error()) {
            trigger_error("Falied to connect to MySQL: " + mysqli_connect_error(), E_USER_ERROR);
        }
    }

    public static function getInstance() {
        //  If no instance, then make one.
        if (!self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    //  Magic method clone is empty to prevent duplication of connections.
    private function __clone() { }

    //  Get mysqli connection.
    public function getConnection() {
        return $this->_connection;
    }
}