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
        $select_query = "SELECT * FROM menu";
        $result = mysqli_query($conn, $select_query);
        while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="min">
                    <div><?=$row['Id']?></div>
                    <div><?=$row['Title']?></div>
                    <div><?=$row['Meta_k']?></div>
                    <div><?=$row['Meta_d']?></div>
                    <div><?=$row['Text']?></div>
                    <br>
                    <div><a href="?action=update&cat=<?=$row['Id']?>">update</a> <a href="?action=delete&cat=<?=$row['Id']?>">delete</a></div>
                    <br>
                </div>
            <?php
            }
            ?>
</body>
</html>