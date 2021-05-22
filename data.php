<?php
    require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="data">
            <h2>DATA</h2>
            <nav>
                <a href="data.php">Actions</a></li>
                <a href="?action=insert">Insert</a></li>
                <br><br>
            </nav>
            <main>
                <?php
                    include "actions_data/delete.php";
                    if(isset($_GET['action']) && $_GET['action']=="insert"){
                        include  "actions_data/insert.php";
                    }else if(isset($_GET['action']) && $_GET['action']=="update"){
                        include  "actions_data/update_form.php";
                    }else{
                        include "actions_data/requests.php";
                    }
                ?>
            </main>
        </div>
</body>
</html>