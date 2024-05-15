<?php
require_once '../interfaces/presenter.php';
require_once '../views/homeView.php';

class HomePresenter implements Presenter
{
    private $view;

    public function __construct()
    {
        $this->view = new HomeView();
    }

    public function renderDefaultView()
    {
        return $this->view->index("");
    }
}
