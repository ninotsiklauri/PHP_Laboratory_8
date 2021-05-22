<?php
    require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="users">
        <h2>USERS</h2>
        <nav>
            <a href="users.php">Actions</a></li>
            <a href="?action=insert">Insert</a></li>
            <br><br>
        </nav>
        <main>
            <?php
                include "actions_users/delete.php";
                if(isset($_GET['action']) && $_GET['action']=="insert"){
                    include  "actions_users/insert.php";
                }else if(isset($_GET['action']) && $_GET['action']=="update"){
                    include "actions_users/update_form.php";
                }else{
                    include "actions_users/requests.php";
                }
            ?>
        </main>
    </div>
</body>
</html>