<?php
require_once('database.php');

class Model {
    protected array $data = array();
    protected Database $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }
}
?>