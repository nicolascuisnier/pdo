<?php
//creation d'une class
class DataBase {

    public $database;

    public function __construct()
    {
        try
{
	// On se connecte à MySQL
	$this->DataBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pdo', 'pdopdo');
}
catch(Exception $errorMessage)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$errorMessage->getMessage());
}

    }
                               

}