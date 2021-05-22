<?php
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $select_data = "SELECT * FROM data WHERE ID = '$cat'";
        $result = mysqli_query($conn, $select_data);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $date =$_POST['date'];
        $type = $_POST['type'];
        $photo = $_POST['photo'];
        $text = $_POST['text'];
        $autor = $_POST['autor'];
        $description = $_POST['description'];
        $meta_k = $_POST['meta_k'];
        $meta_d = $_POST['meta_d'];
        $update_query = "UPDATE data SET title='$title', date='$date', type='$type', photo='$photo', 
                        text='$text', autor='$autor', description='$description', meta_k='$meta_k', meta_d='$meta_d'";
        if(mysqli_query($conn, $update_query)){
           header("location:data.php");
        }else{
            echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
        }
    }
?>
<div>
    <h2>Insert</h2>
    <form method="post">
        <input type="text" name="title" placeholder="Title" value="<?=$row['Title']?>" require>
        <br><br>
        <input type="date" name="date" placeholder="Date" value="<?=$row['Date']?>" require>
        <br><br>
        <input type="text" name="type" placeholder="Type" value="<?=$row['Type']?>" require>
        <br><br>
        <input type="text" name="photo" placeholder="Photo" value="<?=$row['Photo']?>" require>
        <br><br>
        <input type="text" name="text" placeholder="Text" value="<?=$row['Text']?>" require>
        <br><br>
        <input type="text" name="autor" placeholder="Autor" value="<?=$row['Autor']?>" require>
        <br><br>
        <input type="text" name="description" placeholder="Description" value="<?=$row['Description']?>" require>
        <br><br>
        <input type="text" name="meta_k" placeholder="Meta_k" value="<?=$row['Meta_k']?>" require>
        <br><br>
        <input type="text" name="meta_d" placeholder="Meta_d" value="<?=$row['Meta_d']?>" require>
        <br><br>
        <button name="update">Update</button>
    </form>
</div>