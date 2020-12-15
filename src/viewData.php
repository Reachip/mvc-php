<?php

class viewData
{
    protected array $data;

    public function __construct()
    {
        $this->data = array();
    }

    public function set_data($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get_data()
    {
        return $this->data;
    }
}
