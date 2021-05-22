<?php
    if(isset($_POST['insert'])){
        $title = $_POST['title'];
        $date =$_POST['date'];
        $type = $_POST['type'];
        $photo = $_POST['photo'];
        $text = $_POST['text'];
        $autor = $_POST['autor'];
        $description = $_POST['description'];
        $meta_k = $_POST['meta_k'];
        $meta_d = $_POST['meta_d'];
        $insert_query = "INSERT INTO data(title, date, type, photo, text, autor, description, meta_k, meta_d) 
                                VALUES ('$title', '$date', '$type', '$photo', '$text', '$autor', '$description', '$meta_k', '$meta_d')";
        if(mysqli_query($conn, $insert_query)){
           header("location:data.php");
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
        <input type="date" name="date" placeholder="Date" require>
        <br><br>
        <input type="text" name="type" placeholder="Type" require>
        <br><br>
        <input type="text" name="photo" placeholder="Photo" require>
        <br><br>
        <input type="text" name="text" placeholder="Text" require>
        <br><br>
        <input type="text" name="autor" placeholder="Autor" require>
        <br><br>
        <input type="text" name="description" placeholder="Description" require>
        <br><br>
        <input type="text" name="meta_k" placeholder="Meta_k" require>
        <br><br>
        <input type="text" name="meta_d" placeholder="Meta_d" require>
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>