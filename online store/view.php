<?php 
    include 'index.php';
    $sql = "SELECT * FROM student_tbl";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
      while($row = mysqli_fetch_assoc($res)) {
        echo  $row["Name"]. " " . $row["Email-id"]. " " . $row["Password"]. " " . $row["Phone_number"]. "<br>";
      }
    } else {
      echo "No rows selected";
    }
?>