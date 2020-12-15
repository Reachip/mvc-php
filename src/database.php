<?php

require_once("configuration.php");

class Database
{
    protected PDO $pdo;
    protected string $dsn;
    protected Configuration $configuration;

    public function __construct(Configuration $configuration)
    {
        $dsn = "mysql:host=".$configuration::$host.";dbname=".$configuration::$db_name.";port=".$configuration::$port."";
        $this->configuration = $configuration;
    }

    public function connect()
    {
        $this->pdo = new PDO($this->dsn, $this->configuration::$username, $this->configuration::$password);
    }

    public function query(string $query)
    {
        // TODO
    }
}
