<?php
//connect to the database and execute a query

class Database
{
    public $connection; //instance property

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:'. http_build_query($config,'',';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]); //dsn: data source name(connection string)
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
