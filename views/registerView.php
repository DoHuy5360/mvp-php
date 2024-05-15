<?php

require_once '../interfaces/view.php';
require_once 'parentView.php';

class RegisterView extends ParentView implements View
{
    public function index($message)
    {
?>
        <div>
            <div>
                Register page
            </div>
            <hr>
            <form action="register.php" method="post">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>

                <input type="submit" value="Register">
            </form>
            <div style="color: red;"><?php echo $message; ?></div>
            <div>
                <div>Already have an account?</div>
                <button type="button">
                    <a href="login.php">Login</a>
                </button>
            </div>
        </div>
<?php

    }
}
