<?php
require_once '../presenters/logoutPresenter.php';
require_once '../db/mysql.php';


$presenter = new LogoutPresenter($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $presenter->handleLogout();
} else {
    $presenter->renderDefaultView();
}
