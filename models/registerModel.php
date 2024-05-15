<?php

require_once "../db/mysql.php";
require_once "../utils/res/response.php";

class RegisterModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createAccount(
        $email,
        $name,
        $password
    ) {
        $fAccount = $this->conn->query("SELECT * FROM account WHERE email = '{$email}' LIMIT 1");
        if ($fAccount && $fAccount->num_rows > 0) {
            return Response::StatusMessage(false, "Email already exist.");
        }
        //todo: Encrypt password before save.
        $result = $this->conn->query("INSERT INTO account(email, name, password) VALUES('{$email}', '{$name}', '{$password}')");
        if ($result === true && $this->conn->affected_rows > 0) {
            return Response::StatusMessage(true, null);
        } else {
            return Response::StatusMessage(false, $this->conn->error);
        }
    }
    public function getAccountByEmail($email)
    {
        $result = $this->conn->query("SELECT * FROM account WHERE email = '{$email}'");
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}
