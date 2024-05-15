<?php

require_once '../presenters/homePresenter.php';
require_once '../utils/routes/redirect.php';

$homePresenter = new HomePresenter();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $email = $_POST['email'];
    // $name = $_POST['name'];
    // $password = $_POST['password'];

    // $presenter->register($email, $name, $password);
} else {
    session_start(['read_and_close' => true]);
    if ($_SESSION['email'] === null) {
        Route::Redirect("login.php");
    }
    $homePresenter->renderDefaultView();
}
