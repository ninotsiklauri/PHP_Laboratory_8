<?php
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $select_menu = "SELECT * FROM menu WHERE ID = '$cat'";
        $result = mysqli_query($conn, $select_menu);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $meta_k =$_POST['meta_k'];
        $meta_d = $_POST['meta_d'];
        $text = $_POST['text'];
        $update_query = "UPDATE menu SET title='$title', meta_k='$meta_k', meta_d='$meta_d', text='$text'";
        if(mysqli_query($conn, $update_query)){
           header("location:menu.php");
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
        <input type="text" name="meta_k" placeholder="Meta_k" value="<?=$row['Meta_k']?>" require>
        <br><br>
        <input type="text" name="meta_d" placeholder="Meta_d" value="<?=$row['Meta_d']?>" require>
        <br><br>
        <input type="text" name="text" placeholder="Text" value="<?=$row['Text']?>" require>
        <br><br>
        <button name="update">Update</button>
    </form>
</div>