<?php
require_once('view.php');
require_once('template.php');

class IndexView extends View
{
    protected Template $template;

    public function __construct(Template $template)
    {
        $this->template = $template;
    }

    public function render(viewData $data)
    {
        return $this->template->set_content("index.php", $data);
    }
}
