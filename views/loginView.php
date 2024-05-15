<?php

require_once '../interfaces/view.php';
require_once 'parentView.php';

class LoginView extends ParentView implements View
{
    public function index($message)
    {
?>
        <div>
            <div>Login page</div>
            <hr>
            <form action="Login.php" method="post">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>

                <input type="submit" value="Login">
            </form>
            <div>
                <div>Doesn't have an account?</div>
                <button type="button">
                    <a href="register.php">Register</a>
                </button>
            </div>
        </div>
<?php

    }
}
