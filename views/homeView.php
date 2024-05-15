<?php

require_once '../interfaces/view.php';

class HomeView implements View
{
    public function index()
    {
        session_start();
        $name = $_SESSION['name'];
?><div>
            <div>
                <div>Home page</div>
                <?php echo $name; ?>
                <a href="logout.php">Logout</a>
            </div>
            <hr />
            <div>
                This is home page
            </div>
        </div>
<?php
    }
}
