<?php
    require_once('model.php');

    class IndexModel extends Model
    {
        public function __construct(Database $database)
        {
            parent::__construct($database);
        }

        public function get_fake()
        {
            return "fake db request";
        }
    }
