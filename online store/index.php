<?php
    include 'creater.php';
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $qry1 = "INSERT INTO `student_tbl` (`Name`, `Email-id`, `Password`, `Phone_number`) VALUES ('$name', '$email', '$password', '$phone');";
        
        $res1 = mysqli_query($conn, $qry1);
        if(!$res1)
        {
            echo "Error: " . $qry1 . "<br>" . $conn->ePhorror;
        } else {
            echo "<br>Row inserted";
        }
    }
?>
<html>
    <body>
        <form method = "post" action = "index.php">
            <h1>Registration</h1>
            Name: <input type="text" name="name"><br>
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            Phone number : <input type="text" name="phone"><br>

            <input type="submit" name="Submit">
            <p><a href="view.php" type="button">view</p>
        </form>
    </body>
</html>

