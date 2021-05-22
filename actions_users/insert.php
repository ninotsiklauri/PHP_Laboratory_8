<?php
    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $lastname =$_POST['lastname'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $reg_date = $_POST['reg_date'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $insert_query = "INSERT INTO users(name, lastname, age, date, reg_date, password, gender) 
                                VALUES ('$name', '$lastname', '$age', '$date', '$reg_date', '$password', '$gender')";
        if(mysqli_query($conn, $insert_query)){
           header("location:users.php");
        }else{
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    }
?>
<div>
    <h2>Insert</h2>
    <form method="post">
        <input type="text" name="name" placeholder="First Name" require>
        <br><br>
        <input type="text" name="lastname" placeholder="Last Name" require>
        <br><br>
        <input type="number" name="age" placeholder="Age" require>
        <br><br>
        <input type="date" name="date" placeholder="Date" require>
        <br><br>
        <input type="date" name="reg_date" placeholder="Reg_Date" require>
        <br><br>
        <input type="password" name="password" placeholder="Password" require>
        <br><br>
        <input type="text" name="gender" placeholder="Gender" require>
        <br><br>
        <button name="insert">INSERT</button>
    </form>
</div>