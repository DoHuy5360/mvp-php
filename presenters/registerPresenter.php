<?php
require_once '../models/registerModel.php';
require_once '../views/registerView.php';
require_once '../interfaces/presenter.php';
require_once '../utils/routes/redirect.php';

class RegisterPresenter implements Presenter
{
    private $model;
    private $view;

    public function __construct($conn)
    {
        $this->model = new RegisterModel($conn);
        $this->view = new registerView();
    }

    public function register($email, $name, $password)
    {
        if (!empty($email) && !empty($name) && !empty($password)) {
            $response = $this->model->createAccount(
                $email,
                $name,
                $password,
            );
            if ($response->status === true) {
                Route::Redirect('home.php');
            } else {
                $this->view->index($response->message);
            }
        } else {
            $this->view->showError("Please provide your Email and Password.");
        }
    }

    public function renderDefaultView()
    {
        $this->view->index("");
    }
}
