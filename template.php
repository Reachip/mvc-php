<?php
class Template
{
    protected string $path;
    protected $content;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->content = null;
    }

    public function set_content(string $filename, viewData $viewData)
    {
        $data = $viewData->get_data();
        include($this->path.$filename);
    }
}
