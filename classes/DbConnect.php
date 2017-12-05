<?php

/* 
 * Database connection file
 * This is an object-oriented version of our database connection.
 * Object-oriented programming can spped up large development promjects and
 * make your code more re-useable.
 * Class will become objects when instantiated (IE New keyword)
 * When an instance of a class comes to life (now an object) a special method
 * is automatically called: the constructor
 * An object can also have properties (characteristics of the class) and methods
 * (what the class can do)
 * 
 * For example a Person could have the following properties
 * -FirstName
 * -LastName
 * -Address
 * etc.
 * 
 * An example method could be 
 * -AddPerson (to add a new person the the database)
 * -UpdatePerson (to update an existing person in the database)
 * -DeletePerson (to deleter an existing person in the database)
 * -ShowPerson (to view an existing person in the database)
 */

class DbConnect{
    //Create a private variable
    private $conn;
    
    function __construct(){
        //empty constructor
    }
    /*
     * Establish the database connection to local database server
     * and return the database connection handler
     */
    function connect(){
        //1. Get the connection info
        require_once dirname($_SERVER['DOCUMENT_ROOT']). '/dbconn/2017_oop_connect.php';
        //2. Make the connection
        $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
        //3. Set error reporting level
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //4. Return the conection resource back to calling environment
        return $this->conn;
    }
}//end of class right here

