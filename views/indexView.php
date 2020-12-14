<?php
require_once('view.php');
require_once('template.php');

class IndexView extends View
{
    protected Model $model;
    protected Template $template;

    public function __construct(Model $model, Template $template)
    {
        $this->model = $model;
        $this->template = $template;
    }

    public function render(viewData $data)
    {
        return $this->template->set_content("index.php", $data);
    }
}
