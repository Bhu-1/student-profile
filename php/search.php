<?php
    $conn=mysqli_connect("127.0.0.1","root","qwerty","student");
    
    if(!$conn)
        die("Connection Failed");
        
    //echo("Connection Established");
    
    $id=$_POST['id'];
    
    $sql="SELECT * FROM student WHERE id='$id'";
    
    
    
    $result=mysqli_query($conn,$sql);
    
    if(!$result)
        die(mysqli_error($conn));
        
    while($row=mysqli_fetch_array($result)){
    
        echo "First Name : "; echo $row['first_name'];
        echo "</br>";
        echo "Last Name  : "; echo $row['last_name'];
        echo "</br>";
        echo "College Name : ";
        echo $row['college_name'];
        echo "</br>";
        echo "College ID : ";
        echo $row['id'];
        echo "</br>";
        echo "Gender    : ";
        echo $row['gender'];
    }
    
?>
