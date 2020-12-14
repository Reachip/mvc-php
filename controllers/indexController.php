<?php
    require_once("controller.php");
    require_once("viewData.php");
    
    class IndexController extends Controller
    {
        public function __construct(Model $model, View $view)
        {
            parent::__construct($model, $view);
        }

        public function mount()
        {
            $viewData = new viewData();
            $viewData->set_data("username", "Rached");

            return $this->view->render($viewData);
        }
    }
