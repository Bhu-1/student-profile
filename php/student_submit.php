<?php
    $conn=mysqli_connect("127.0.0.1","root","qwerty","student");
    
    if(!$conn)
        die("connection failed");
        
    //echo("Connection Established");
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $id=$_POST['id'];
    $college_name=$_POST['college_name'];
    $gender=$_POST['gender'];
    
    $sql="INSERT INTO student(first_name,last_name,id,college_name,gender) VALUES ('$first_name','$last_name','$id','$college_name','$gender')";
    
    //echo $sql;
    
    if(mysqli_query($conn,$sql)){
        echo "Hii..";
        echo "<br>";
        echo $first_name;echo "</br>";
        echo ("Successfull Registration\n");
        
    }
    
    else
        echo("Wrong Query");
        
    mysqli_close($conn);
    
?> 

  
