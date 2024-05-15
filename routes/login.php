<?php
require_once '../presenters/loginPresenter.php';
require_once '../db/mysql.php';


$presenter = new LoginPresenter($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $presenter->handleLogin($email, $password);
} else {
    $presenter->renderDefaultView();
}
