<?php
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $select_users = "SELECT * FROM users WHERE ID = '$cat'";
        $result = mysqli_query($conn, $select_users);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $lastname =$_POST['lastname'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $reg_date = $_POST['reg_date'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $update_query = "UPDATE users SET name='$name', lastname='$lastname', age='$age', date='$date', 
                        reg_date='$reg_date', password='$password', gender='$gender'";
        if(mysqli_query($conn, $update_query)){
           header("location:users.php");
        }else{
            echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
        }
    }
?>
<div>
    <h2>Insert</h2>
    <form method="post">
        <input type="text" name="name" placeholder="First Name" value="<?=$row['Name']?>" require>
        <br><br>
        <input type="text" name="lastname" placeholder="Last Name" value="<?=$row['Lastname']?>" require>
        <br><br>
        <input type="number" name="age" placeholder="Age" value="<?=$row['Age']?>" require>
        <br><br>
        <input type="date" name="date" placeholder="Date" value="<?=$row['Date']?>" require>
        <br><br>
        <input type="date" name="reg_date" placeholder="Reg_Date" value="<?=$row['Reg_Date']?>" require>
        <br><br>
        <input type="password" name="password" placeholder="Password" value="<?=$row['Password']?>" require>
        <br><br>
        <input type="text" name="gender" placeholder="Gender" value="<?=$row['Gender']?>" require>
        <br><br>
        <button name="update">Update</button>
    </form>
</div>