<?php
    if(isset($_GET['action']) && $_GET['action']=="delete"){
        $cat =  $_GET['cat'];
        $delete_query = "DELETE FROM menu WHERE id='$cat'";
        if(mysqli_query($conn, $delete_query)){
        }else{
            echo "Error: " . $delete_query  . "<br>" . mysqli_error($conn);
        }
    }
?>