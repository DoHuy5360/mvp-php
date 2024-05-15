<?php

require_once '../interfaces/view.php';

class LogoutView implements View
{
    public function index($message)
    {
?>
        <div>
            <div>Logout page</div>
            <hr>
            <div>
                <div>Do you want to logout</div>
                <form action="logout.php" method="post">

                    <button type="submit">Yes</button>
                </form>
            </div>
        </div>
<?php
    }
}
