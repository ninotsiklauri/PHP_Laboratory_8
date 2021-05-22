<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $select_query = "SELECT * FROM users";
        $result = mysqli_query($conn, $select_query);
        while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="min">
                    <div><?=$row['Id']?></div>
                    <div><?=$row['Name']?></div>
                    <div><?=$row['Lastname']?></div>
                    <div><?=$row['Age']?></div>
                    <div><?=$row['Date']?></div>
                    <div><?=$row['Reg_Date']?></div>
                    <div><?=$row['Password']?></div>
                    <div><?=$row['Gender']?></div>
                    <br>
                    <div><a href="?action=update&cat=<?=$row['Id']?>">update</a> <a href="?action=delete&cat=<?=$row['Id']?>">delete</a></div>
                    <br>
                </div>
            <?php
            }
            ?>
</body>
</html>