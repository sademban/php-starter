<?php /** @noinspection PhpVoidFunctionResultUsedInspection */

require 'functions.php';
//require 'router.php';
require 'Database.php';

//connect to our MySQL database.

//class Person
//{
//    public $name;
//    public $age;
//
//    public function breathe()
//    {
//        echo $this->name . " is breathing";
//    }
//}
//
//$person = new Person();
//
//$person->name = "John Doe";
//$person->age = 25;
//
//$person->breathe();

$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);
