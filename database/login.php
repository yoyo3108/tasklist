<?php

class login
{
    private $host= "localhost";
    private $user= "root";
    private $password= "";
    private $dbname= "taskList";

    public function __construct()
    {

        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        try
        {
            $bdd = new PDO($dns, $this->user, $this->password);
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}