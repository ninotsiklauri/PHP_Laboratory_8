<?php
    require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu">
        <h2>MENU</h2>
        <nav>
            <a href="menu.php">Actions</a></li>
            <a href="?action=insert">Insert</a></li>
            <br><br>
        </nav>
        <main>
            <?php
                include "actions_menu/delete.php";
                if(isset($_GET['action']) && $_GET['action']=="insert"){
                    include "actions_menu/insert.php";
                }else if(isset($_GET['action']) && $_GET['action']=="update"){
                    include "actions_menu/update_form.php";
                }else{
                    include "actions_menu/requests.php";
                }
            ?>
        </main>
    </div>
</body>
</html>