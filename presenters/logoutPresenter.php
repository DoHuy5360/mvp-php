<?php
require_once '../interfaces/presenter.php';
require_once '../views/logoutView.php';
require_once '../utils/routes/redirect.php';

class LogoutPresenter implements Presenter
{
    private $view;

    public function __construct()
    {
        $this->view = new LogoutView();
    }

    public function renderDefaultView()
    {
        return $this->view->index("");
    }
    public function handleLogout()
    {
        session_start();
        session_unset();
        session_destroy();
        Route::Redirect('index.php');
    }
}
