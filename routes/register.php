<?php
require_once '../presenters/registerPresenter.php';
require_once '../db/mysql.php';


$presenter = new RegisterPresenter($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $presenter->register($email, $name, $password);
} else {
    $presenter->renderDefaultView();
}
