<?php
require_once '../models/registerModel.php';
require_once '../views/loginView.php';
require_once '../interfaces/presenter.php';
require_once '../utils/routes/redirect.php';

class LoginPresenter implements Presenter
{
    private $model;
    private $view;

    public function __construct($conn)
    {
        $this->model = new RegisterModel($conn, null, null);
        $this->view = new LoginView();
    }

    public function handleLogin($email, $password)
    {
        if (!empty($email) && !empty($password)) {
            $record = $this->model->getAccountByEmail($email);
            $rPassword = $record['password'];
            $rName = $record['name'];
            if ($password === $rPassword) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $rName;
                Route::Redirect('home.php');
            } else {
                $this->view->showError("Fail to login, please check again your Email and Password.");
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
