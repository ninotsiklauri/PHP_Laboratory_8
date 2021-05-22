<?php
    if(isset($_POST['insert'])){
        $title = $_POST['title'];
        $meta_k =$_POST['meta_k'];
        $meta_d = $_POST['meta_d'];
        $text = $_POST['text'];
        $insert_query = "INSERT INTO menu(title, meta_k, meta_d, text) 
                                VALUES ('$title', '$meta_k', '$meta_d', '$text')";
        if(mysqli_query($conn, $insert_query)){
           header("location:menu.php");
        }else{
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    }
?>
<div>
    <h2>Insert</h2>
    <form method="post">
        <input type="text" name="title" placeholder="Title" require>
        <br><br>
        <input type="text" name="meta_k" placeholder="Meta_k" require>
        <br><br>
        <input type="text" name="meta_d" placeholder="Meta_d" require>
        <br><br>
        <input type="text" name="text" placeholder="Text" require>
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>