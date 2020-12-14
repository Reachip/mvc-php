<?php
abstract class Controller
{
    protected View $view;
    protected Model $model;

    public function __construct(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    abstract public function mount();
}
